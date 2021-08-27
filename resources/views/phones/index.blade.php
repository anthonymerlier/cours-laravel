@extends('layouts.app')

@section('content')
    <h1>Liste des téléphones</h1>
    <ul>
        @foreach ($phones as $phone)
            <li><a href="{{ route('phone.show', $phone->slug ) }}">{{ $phone->name }}</a> ( {{ $phone->brand->name }} )</li>
        @endforeach
    </ul>
@endsection