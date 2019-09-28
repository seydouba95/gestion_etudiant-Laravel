<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $fillable = ['code','nom'];  //ces champs sont modifiables

    public function etudiants(){
        return $this->hasMany('App\Etudiant');
    }
}
