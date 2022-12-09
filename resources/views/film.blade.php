<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film</title>
</head>
<body>
        <h1> 
            {{$f->titre}} 
        </h1>
        <br><b>Date de sortie : </b> {{$f->annee}}
        <br><b>Nb de Spectateurs : </b> {{$f->nbSpectateurs}}
        <br><b>Genre : </b> {{$f->genre->type}}
        <br><b>Realisateur : </b> {{$f->realisateur->nom}} {{$f->realisateur->prenom}}

        <h1>
            Acteurs
        </h1>
        @foreach($acteurs as $a)
            <a href="/personnage/{{$a->id}}">{{$a->nom}} {{$a->prenom}} <br></a>
        @endforeach



    
</body>
</html>
