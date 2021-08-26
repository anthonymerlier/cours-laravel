@extends('layouts.app')

@section('content')
    <p>Marque : {{ $brand->name }}</p>
    @foreach ($brand->phones as $phone) 
        <p>{{ $phone->name }} {{ $phone->slug }}</p>
    @endforeach
@endsection