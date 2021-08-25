@extends('layouts.app')

@section('content')

    <h1>Modification d'un Service</h1>
    <form action="{{ route("serviceupdate", $service->slug ) }}" method="post">
        @csrf
        <input type="text" name="title" value="{{ $service->title }}" required>
        @if($errors->has('title'))
            <div style="color:red">{{ $errors->first('title') }}</div>
        @endif
        <br>
        <textarea name="content" id="content" cols="30" rows="10">{{ $service->content }}</textarea>
        @if($errors->has('content'))
            <div style="color:red">Le contenu ne peut être vide</div>
        @endif
        <br>
        <input type="submit" value="Modifier">
    </form>

    

@endsection