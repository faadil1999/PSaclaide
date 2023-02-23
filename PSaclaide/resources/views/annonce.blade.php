@extends('layouts.app')

@section('content')

    @foreach($user->annonces as $annonces)
        <span> {{$annonce->title}}</span>

@endsection