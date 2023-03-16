@extends("layouts.web")
@section("main")
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
           
            <h4> Voici l'annonce {{$annonce->id}} : </h4>
            <div>
                <span>{{$annonce->title }} : {{$annonce->description}}</span>
            </div>
        </div>
    </div>
</div>    


@endsection