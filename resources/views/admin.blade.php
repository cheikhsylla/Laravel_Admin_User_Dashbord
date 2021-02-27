@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1 id="welcome">Hello Admin </h1>
    <hr>
    <p>Ci dessous la liste des membres</p>
    <hr>
    <p id='msg'>{{session('msg')}}</p>
    @foreach($datas as $data)

    <p><strong>Prénom:</strong> {{$data->prenom}} <strong> Nom:</strong> {{$data->nom}}  <strong>Email:</strong> {{$data->email}} <a href="welcome/{{$data->id}}">Voir plus</a> </p> 
    <!-- <p>Nom: {{$data->nom}} </p>
    <p>Email: {{$data->email}} </p>
    <p>Adresse: {{$data->adresse}} </p>
    <p>Ville: {{$data->ville}} </p>
    <p>Commentaire: {{$data->commentaire}} </p> -->
    <hr>

    @endforeach
</div>
@endsection
