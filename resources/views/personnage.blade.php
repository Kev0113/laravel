<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>
        {{$p->nom}} {{$p->prenom}}
    </h1>
    <p>
        <b>Née le : </b>{{$p->naissance}}
    </p>
    <p>
        <b>Nationalité : </b>{{$p->pays}}
    </p>
    <p>
        <b>Mort le : </b>{{$p->mort}}
    </p>

    <h1>
        Présent dans:
    </h1>


    @foreach($acteurs as $a)
        <a href="/film/{{$a->id}}">{{$a->titre}} <br></a>
        
    @endforeach

</body>
</html>