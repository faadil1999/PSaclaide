@extends('layouts.app')

<h3>Coucou {{ Auth::user()->first_name }}, voici la liste de tes annonces :</h1>
    <img src="/assets/img/departement/{{Auth::user()->departement->picture}}" alt="Img Profile"><br>
    @foreach($user->annonces as $annonce)
        <span> {{$annonce->title}} : {{$annonce->description}} => </span><br>
    @endforeach

<a href="/home" >
    <label> Home </label> 
</a>

