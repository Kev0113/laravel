<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tous</title>
</head>
<body>
    <a href="/ajoutfilm">Ajout Film <br></a>
    <a href="/ajoutreal">Ajout Realisateur <br></a>

    <h1>
        Liste des films
    </h1>
        @foreach($f as $f)
            <a href="/film/{{$f->id}}">{{$f->titre}} <br></a>
        @endforeach

    <h1>
        Liste des acteurs
    </h1>
        @foreach($f2 as $f)
            <a href="/personnage/{{$f->id}}">{{$f->nom}} {{$f->prenom}} <br></a>
        @endforeach
</body>
</html>