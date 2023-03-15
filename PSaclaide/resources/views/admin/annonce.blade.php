@extends('layouts.web')

@section("main")
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
           
                @foreach($annonces as $annonce)
                    <span> {{$annonce->title}}</span><br>
                    <a href="{{route("details_annonce",['id'=>$annonce->id])}}"> details </a>
                @endforeach
        </div>
    </div>
</div>            


@endsection    

