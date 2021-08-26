@extends('layouts.app')

@section('content')
    <h1>Liste des téléphones</h1>
    <ul>
        @foreach ($phones as $phone)
            <li><a href="{{ route('phone.show', $phone->slug ) }}">{{ $phone->name }}</a> ( {{ $phone->brand->country }} )</li>
            @dump($phone->brand)
        @endforeach
    </ul>
@endsection