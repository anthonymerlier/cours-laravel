@extends('layouts.app')

@section('content')
    <h1>Liste des marques de téléphone</h1>
    <ul>
        @foreach ($brands as $brand)
            <li>{{ $brand->name }}</li>
        @endforeach
    </ul>
@endsection