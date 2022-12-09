@extends('layouts.app_today')
@section('content')

<br>
<form action="{{route('register')}}" method="POST">
        @csrf
        <input type="text" name="name" required placeholder="Name"> <br>
        <input type="email" name="email" required placeholder="Email"> <br>
        <input type="password" name="password" required placeholder="password"> <br>
        <input type="password" name="password_confirmation" required placeholder="password"> <br>
        <input type="submit">
    </form>


@endsection