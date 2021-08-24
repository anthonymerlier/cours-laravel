@extends('layouts.app')

@section('content')
    <h1>Welcome to Services page</h1>

    <ol>
        @foreach($services as $service)
            <li><a href="{{ route("servicepage", $service->slug) }}">{{ $service->title }}</a> {{ $service->content }}</li>
        @endforeach
    </ol>
@endsection