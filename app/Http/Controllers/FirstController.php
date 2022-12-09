<?php

//PHP NAMESPACE

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Genre;
use App\Models\Personne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FirstController extends Controller
{
        //dd($films);

//*************************************************************CREATION D'UN FILM**********************************************************
        //$f = new Film();
        //$f->titre = "Le film lol";
        //$f->annee = 2055;
        //$f->nbSpectateurs = 1000;
        //$f->save(); //INSERT INTO film VALUES(NULL,"Le film lol",2055....);

//******************************************************RECUPERARTION D'UN FILM PAR ID*****************************************************

        //$f = Film::findOrFail(39);        //Film ayant pour id 71;
        //$f->nbSpectateurs *=10;        // fait *10 sur l'id 71
        //$f->annee = 2550;
        //$f->save();

//*********************************************************************COMPLEMENT**********************************************************

        //$f->save();  //Save dans BDD
        //$f->delete(); //delete id 71

//*********************************************************************AFFICHAGE************************************************************ 
        //Avant
        //$films = DB::select('select * from film');
        //$personnes = DB::select('select * from personne');

        //echo "".Film::count()." <b> Films au total </b> <br \><br \>"; //Nb de films

//****************************************************************REQUETE AVEC WHERE********************************************************
        //echo "Film sortie en 2010";
        //$films= Film::whereRaw('annee=?', [2010])->orderBy("nbSpectateurs")->get(); 
        //foreach($films as $f3){
        //    echo "<br/>".$f3->titre;
        //};
//****************************************************************REQUETE AVEC JOINTURE********************************************************

    public function tous(){
        $f = Film::all();
        $f2 = Personne::all();
        return view('tous', ["f" => $f, "f2" => $f2]);
    }

    function film($idFilm){
        $f = Film::findOrFail($idFilm);
        $acteur = $f->acteurs;
        return view('film', ["f" => $f, "acteurs" => $acteur]);
    }

    public function personne($idActeur){
        $p = Personne::findOrFail($idActeur);
        $acteur = $p->realisations;
        return view('personnage', ["p" => $p,"acteurs" => $acteur]);
    }

    public function AjoutFilm(){
        $f2 = Personne::all();
        $f3 = Genre::all();
        return view('ajoutfilm', ["acteurs" => $f2, "genre" => $f3]);
    }

    public function ajoutfilmT(){
        $f = new Film();
        $f->titre = $_POST['titre'];
        $f->annee = $_POST['annee'];
        $f->nbSpectateurs = $_POST['nbspec'];
        $f->idGenre = $_POST['genre'];
        $f->idRealisateur = $_POST['realisateur'];
        $f->save();

        $f->acteurs()->sync($_POST['acteur']);
        return redirect("/film/$f->id");
    }

    public function ajoutreal(){
        return view('ajoutreal');
    }

    public function ajoutrealT(){
        $f = new Personne();
        $f->nom = $_POST['nom'];
        $f->prenom = $_POST['prenom'];
        $f->pays = $_POST['pays'];
        $f->naissance = $_POST['naissance'];
        $f->mort = $_POST['mort'];
        $f->save();
        return redirect("/personnage/$f->id");

    }
}
