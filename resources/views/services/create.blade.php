@extends('layouts.app')

@section('content')

    <h1>Ajout d'un Service</h1>
    <form action="{{ route("servicestore") }}" method="post">
        @csrf
        <input type="text" name="title" value="Mon nouveau titre"><br>
        <textarea name="content" id="content" cols="30" rows="10">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt deleniti nam amet velit. Quaerat expedita esse id nostrum voluptatibus temporibus maiores! Sequi perspiciatis dicta illum omnis et amet impedit vitae fuga harum sapiente!</textarea><br>
        <input type="submit" value="Créer">
    </form>

@endsection