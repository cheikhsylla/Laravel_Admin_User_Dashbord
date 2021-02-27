@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1 id="welcome">Welcome </h1>
    <hr>
    <p id='msg'>{{session('msg')}}</p>
    <a href="/sendForm"> Cliquer ici pour envoyer un formulaire</a>

</div>
@endsection
