@extends('layouts.app')

@section('content')
    <p>Modele : {{ $phone->name }}</p>
    <p>Marque : {{ $phone->brand->name }}</p>
    <p>Année de sortie : {{ $phone->release_year }}</p>
    <p>Pays de provenance : {{ $phone->country }}</p>
@endsection