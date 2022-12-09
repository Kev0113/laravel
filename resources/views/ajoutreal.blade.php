<form action="/ajoutrealT" method = "POST">
    @csrf
    <input type="text" name = "nom" placeholder = "Nom">
    <input type="text" name = "prenom" placeholder = "Prenom">
    <input type="text" name = "pays" placeholder = "Pays">
    <input type="date" name = "naissance" placeholder = "Naissance">
    <input type="date" name = "mort" placeholder = "Mort">


    <input type="submit">

</form>