@extends('layouts.app')

@section('content')
    <h1>Welcome to Contact page</h1>
    <p>Téléphone : {{ $coords['tel'] }}</p>
    <p>Mail : {{ $coords['mail'] }}</p>
    <p>Noms :
        <ul>
            @foreach ($coords['noms'] as $nom)
                <li>{{ $nom }}</li>
            @endforeach
        </ul>
    </p>
@endsection