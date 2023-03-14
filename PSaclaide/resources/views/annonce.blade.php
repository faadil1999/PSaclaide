@extends('layouts.app')

<h3>Coucou {{ Auth::user()->first_name }}, voici la liste de tes annonces :</h1>
    @foreach($user->annonces as $annonce)
        <span> {{$annonce->title}}</span><br>
    @endforeach

