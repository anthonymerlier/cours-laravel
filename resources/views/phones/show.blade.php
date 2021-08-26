@extends('layouts.app')

@section('content')
    <p>Modele : {{ $phone->name }}</p>
    <p>Année : {{ $phone->release_year }}</p>
    <p>Prix : {{ $phone->price }} €</p>
    <p>Marque :<a href="{{ route('brand.show', $phone->brand->slug) }}">{{ $phone->brand->name }}</a></p>
@endsection