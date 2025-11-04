<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    /**
     * Os atributos que podem ser preenchidos em massa.
     */
    protected $table = 'mensagens';
    
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'mensagem',
    ];
}