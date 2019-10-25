<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudo extends Model
{
    //
    protected $fillable = [
        "titulo",
        "conteudo",
        "dias_id"
    ];
}
