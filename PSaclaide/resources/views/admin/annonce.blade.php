@extends('layouts.web')

@section("main")
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
           
                <h4> Coucou {{ auth()->user()->first_name }}, voici la liste de tes annonces : </h4>
                <img src="/assets/img/departement/{{Auth::user()->departement->picture}}" alt="Image Picture"><br>
                @foreach($annonces->indivi as $annonce)
                    <span> {{$annonce->title}} =></span>
                    <a href="{{route("details_annonce",['id'=>$annonce->id])}}"> details </a><br>
                @endforeach
        </div>
    </div>
</div>            


@endsection    

