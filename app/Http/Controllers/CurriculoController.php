<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurriculoRequest;
use App\Models\Curriculo;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CurriculoController extends Controller
{

    protected $curriculo;

    public function __construct(Curriculo $curriculo)
    {
        $this->curriculo = $curriculo; 
    }


    public function index(Request $request)
    {
        $search = $request->search;
        $curriculos = $this->curriculo
            ->getCurriculos(search: $request->search ?? '');
        
      //   return response()->json([ "curriculos" => $curriculos ], 200);

        return View('curriculos.index', compact('curriculos'));
    }


    public function create()
    {

        return View('curriculos.create');
    }


    public function store(StoreCurriculoRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;

        Curriculo::create($data);

        return redirect()->route('curriculos.index')->with('mensagem', 'Curriculo Cadastrado com Sucesso!');
    }


    public function edit($id)
    {
        $curriculo = Curriculo::findOrFail($id);

        return view('curriculos.edit', compact('curriculo'));
    }


    public function update(Request $request)
    {
        $data = $request->all();
        Curriculo::findOrFail($request->id)->update($data);
        //  dd($data);
        
        return redirect('/curriculos')->with('mensagem', 'Curriculo Editado com Sucesso!'); 
    }



    public function showPrint($id)
    {
        $curriculo = Curriculo::findOrFail($id);

        $pdf = PDF::loadView('curriculos.show_print', compact('curriculo'));

        return $pdf->setPaper('a4')->stream('Curriculo_'.$curriculo->nome);
    }


}