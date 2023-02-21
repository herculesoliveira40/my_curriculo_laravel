<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'telefone', 'email', 'idade', 'cidade', 'area', 
        'sobre', 'formacao', 'conhecimento_complementar', 'experiencia', 'user_id'
    ];


    public function getCurriculos(string | null $search = '')
    {
        $curriculos = $this->where(function ($query) use ($search) {
            if ($search) 
            {
                $query->where('nome', 'LIKE', "%{$search}%");
                    $query->orwhere('id', $search);
            }
        })
            // ->with('user')
            ->get();

        return $curriculos;
    }
}
