<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name = "csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <header>
        @if(Auth::check())
            Bonjour {{Auth::user()->name}}
            <a href="{{route('logout')}}" onclick="document.getElementById('logout').submit(); return false;" >Logout</a>
            <form id="logout" action="{{route('logout')}}" method="POST">
                @csrf
            </form>
            <a href="{{route('item')}}">Nouveau TODO</a>
        @else
            <a href='{{route("login")}}'>Login</a>
            Pas de compte ?<a href='{{route("register")}}'>Inscrivez vous !</a>
        @endif
    </header>
    @yield('content')
</body>
</html>