@extends('layouts.app')

@section('content')
    <h1>Information concernant le service numéro {{ $service->id }}</h1>
    <p>Titre : {{ $service->title }}</p>
    <p>Contenu : {{ $service->content }}</p>
@endsection