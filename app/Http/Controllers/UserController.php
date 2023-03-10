<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCreateUserFormRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function create()
    {

        return View('users.create');
    }

    public function store(StoreUserRequest $request)
    {

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->profile = 1;
        $user->save();

        if (auth()->user() == true) 
        {
            return redirect('/login')->with('mensagem', 'Usuario Cadastrado com Sucesso!');
        } 
        else 
        {
            return redirect()->back()->with('mensagem', 'Registrado com Sucesso!'); //Invocar mensagemmmmmmmmmmmmmm
        }
    }

    public function dashboard()
    {
        $users = User::all();

        return View('users.dashboard', compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        if (auth()->user()->id == $id OR auth()->user()->profile == 0) 
        {
            return view('users.edit', ['user' => $user]);
        } 

        else 
        {
            return redirect()->back()->with('alerta', 'Ops você não tem permissão para editar outro:(');
        }
    }


    public function update(Request $request)
    {

        $data = $request->all();

        $data['password'] = Hash::make($request->password);

        User::findOrFail($request->id)->update($data);
        return redirect('/users/dashboard')->with('mensagem', 'Usuario editado com Sucesso!', ['data' => $data]);
    }


    public function destroy(Request $request, $id)
    {

        $id = $request['index_id'];
        // dd('teste',$id);
        User::findOrFail($id)->delete();

        return redirect('/users/dashboard')->with('mensagem', 'Usuario deletado com Sucesso!'); //Invocar mensagemmmmmmmmmmmmmm
    }

    public function login()
    {
        return view('users.login');
    }

    public function auth(Request $request)
    {

        $data =  $request->all();
        $remmenber =  isset($data['lembrar']) ? true : false;

        if (FacadesAuth::attempt(['email' => $data['email'], 'password' => $data['password']], $remmenber)) 
        {
            $us = auth()->user();
            //dd($us['name']);
            return redirect('users/dashboard')->with('mensagem', 'Olá: ' . $us['name'] . ' Perfil: ' . $us['profile']);
        } 
        else 
        {
            return redirect('/login')->with('alerta', 'E-mail ou Senha incorreta');
        }
    }

    public function logout()
    {
        FacadesAuth::logout();
        return redirect('/login')->with('alerta', 'Logout !');
    }
}
