@extends('layouts.app')

@section('content')
<form action="/" method="POST" >
    @csrf

<div class="container">
    <div class="form-group">
        <label for="exampleInputEmail1">Nom</label>
        <input type="text" class="form-control" id="name" name='nom' aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Prenom</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name='prenom' aria-describedby="emailHelp">
    </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name='email' aria-describedby="emailHelp">
  </div>
  <div class="form-group">
        <label for="exampleInputEmail1">Adresse</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name='adresse' aria-describedby="emailHelp">
    </div>
  <div class="form-group">
        <label for="exampleInputEmail1">Ville</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name='ville' aria-describedby="emailHelp">
    </div>
    
  <div class="form-group">
    <label for="">Téléphone</label>
    <input type="number" id="numero" name="numero"  min="10" >
  </div>
 
  <div class="form-group">
    <label for="exampleTextarea">Commentaire</label>
    <textarea class="form-control" id="exampleTextarea" rows="3" name='commentaire'></textarea>
  </div>
  <a href="/">Retour</a>  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
<div>
@endsection
