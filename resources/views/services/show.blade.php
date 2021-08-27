@extends('layouts.app')

@section('content')
    <h1>Information concernant le service numéro {{ $service->id }}</h1>
    <p>Titre : {{ $service->title }}</p>
    <p>Contenu : {{ $service->content }}</p>
    <p>Image :<img src="{{ $service->picture }}"/></p>
    <div>
        <a href="{{ route("editservicepage", $service->slug) }}" style="background: orange; padding: 0.5rem; color:white; border-radius: 7px ">Modifier le service</a>
        <form action="{{ route("servicedelete", $service->slug) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" style="background: red; padding: 0.5rem; color:white; border-radius: 7px; margin-top: 25px ">Supprimer  le service</button>
        </form>
    </div>
@endsection