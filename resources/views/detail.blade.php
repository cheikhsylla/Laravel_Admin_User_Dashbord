@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1 id="welcome">Hello Admin </h1>
    <hr>
    <p><strong>Membre Id:</strong> {{$id[0]->id}}</p>
    <hr>
    @foreach ($id as $user)
        
        <p><strong>Nom:</strong> {{$user->nom}} </p>
        <p><strong>Email:</strong>  {{$user->email}} </p>
        <p><strong>Adresse:</strong>  {{$user->adresse}} </p>
        <p><strong>Ville:</strong>  {{$user->ville}} </p>
        <p><strong>Commentaire:</strong>  {{$user->commentaire}} </p>
        <hr>
        
    @endforeach
    <form action="/welcome/{{$id[0]->id}}" method="POST">
        @csrf
        @method('DELETE')
    <a href="/admin">Retour </a> <button>Supprimer</button>
    </form>
    

@endsection
