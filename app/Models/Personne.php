<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;
    protected $table = "personne"; //!!!!!!!!!!!!!!
    public $timestamps = false;

    public function realisations(){
        return $this->hasMany(Film::class, "idRealisateur");
        //SELECT * FROM film JOIN personne ON idRealisateur = $this->id;
    }

    public function roles(){
        return $this->belongsToMany(Film::class, 'joue', 'idPersonne', 'idFilm');
    }
}
