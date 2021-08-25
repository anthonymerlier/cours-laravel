@extends('layouts.app')

@section('content')
    <h1>Information concernant le service numéro {{ $service->id }}</h1>
    <p>Titre : {{ $service->title }}</p>
    <p>Contenu : {{ $service->content }}</p>
    <div>
        <a href="{{ route("editservicepage", $service->slug) }}" style="background: orange; padding: 0.5rem; color:white; border-radius: 7px ">Modifier le service</a>
        <a href="{{ route("servicedelete", $service->slug) }}" style="background: red; padding: 0.5rem; color:white; border-radius: 7px ">Supprimer  le service</a>
    </div>
@endsection