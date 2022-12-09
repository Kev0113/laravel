@extends('layouts.app_today')
@section('content')
<br>
<form action="{{route('item')}}" method="POST">
        @csrf
        <input type="titre" name="titre" required placeholder="Titre" required value = "{{old('description')}}"> <br>
        <textarea name="description">{{old('description')}}</textarea> <br>
        <input type="number" name="date_limite" require placeholder="Date limite" required value = "{{old('description')}}">
        <input type="submit">
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection