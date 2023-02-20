<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculo extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'telefone', 'email', 
                            'idade', 'cidade', 'area',
                             'sobre', 'formacao', 'conhecimento_complementar', 'experiencia', 'user_id'
                          ];

}

