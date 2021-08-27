@extends('layouts.app')

@section('content')

    <h1>Ajout d'un Service</h1>
    <form action="{{ route("servicestore") }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" value="" required>
        @if($errors->has('title'))
            <div style="color:red">{{ $errors->first('title') }}</div>
        @endif
        <br>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
        @if($errors->has('content'))
            <div style="color:red">Le contenu ne peut être vide</div>
        @endif
        <br>
        <input type="file" name="picture" id="picture">
        <input type="submit" value="Créer">
    </form>

    

@endsection