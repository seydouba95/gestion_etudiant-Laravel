<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $fillable = ['prenom' , 'nom' , 'email' , 'tel' , 'dateNaiss' , 'classe_id'];

    public function classe(){
        return $this->belongsTo('App\Classe');
    }
}
