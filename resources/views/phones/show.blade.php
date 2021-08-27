@extends('layouts.app')

@section('content')
    <p>Modele : {{ $phone->name }}</p>
    <p>Marque : {{ $phone->brand->name }}</p>
@endsection