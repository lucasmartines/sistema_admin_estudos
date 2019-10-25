<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dia extends Model
{
    //
    protected $fillable = [
        "titulo",
 
 
    ];
    public function estudos(){
        return $this->hasMany("App\Estudo","dias_id");
    }
}
