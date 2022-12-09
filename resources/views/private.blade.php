@extends('layouts.app_today')
@section('content')

<p>Page privée</p>


    <ul>
        @foreach(Auth::user()->maliste as $t)
            <li>
                {{$t->titre}}
            </li>
        @endforeach
    </ul>


@endsection