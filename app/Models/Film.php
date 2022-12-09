<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $table = "film"; //!!!!!!!!!!!!!!
    public $timestamps = false;


    //JOINTURE
    public function realisateur(){
        return $this->belongsTo(Personne::class, "idRealisateur"); //this = moi-même
        // SELECT * FROM personne where personne.id=$this->idRealisateur
    }

    public function genre(){
        return $this->belongsTo(Genre::class, "idGenre");
    }

    public function acteurs(){
        return $this->belongsToMany(Personne::class, "joue", "idActeur", "idFilm");
        //SELECT * FROM PERSONNE JOIN JOUE ON PERSONNE.ID = IDACTEUR WHERE IDFILM =$THIS->ID
    }
}
