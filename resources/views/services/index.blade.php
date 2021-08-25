@extends('layouts.app')

@section('content')
    <h1>Welcome to Services page</h1>

    <a href="{{ route("createservicepage") }}" style="background: green; padding: 0.5rem; color:white; border-radius: 7px ">Ajouter un service</a>

    @if(count($services) > 0)
        <ol>
            @foreach($services as $service)
                <li><a href="{{ route("servicepage", $service->slug) }}">{{ $service->title }}</a> {{ $service->content }}</li>
            @endforeach
        </ol>
    @else
        <p>Aucun service n'a été trouvé</p>
    @endif
@endsection