<form action="/ajoutfilmT" method = "POST">
    @csrf
    <input type="text" name = "titre" placeholder = "Titre">
    <input type="text" name = "annee" placeholder = "Année">
    <input type="text" name = "nbspec" placeholder = "NbSpectateurs">
    <select name="realisateur">
        @foreach($acteurs as $a)
            <option value="{{$a->id}}"> {{$a->prenom}} {{$a->nom}}</option>
        @endforeach
    </select>
    <select name="genre">
        @foreach($genre as $g)
            <option value="{{$g->id}}">{{$g->type}}</option>
        @endforeach
    </select>
    <select name="acteur[]" multiple size = "10">
        @foreach($acteurs as $a)
        <option value="{{$a->id}}">{{$a->prenom}} {{$a->nom}}</option>
        @endforeach 
    </select>


    <input type="submit">

</form>