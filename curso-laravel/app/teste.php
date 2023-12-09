<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teste extends Model
{
    protected $fillable = [
        'nome',
        'categoria',
        'ano_criacao',
        'valor',
    ];
}
