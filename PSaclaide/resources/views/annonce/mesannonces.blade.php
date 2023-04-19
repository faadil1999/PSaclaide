@extends('layouts.web')
@section('main')
        <div class="row">
        <h1>Mes annonces de cours :</h1>
            @foreach ($annonces as $annonce)
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <span>{{$annonce->title}}</span>
                            
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <span>Emplacement : {{ $annonce->location }}</span>
                        </h6>
                        <p class="card-text">
                            Jour : {{ date('d/m/Y', strtotime($annonce->date)) }}<br>
                            Horaires : {{ substr($annonce->heure, 0, 5) }}<br>
                            Matière : {{$annonce->matiere->name}}<br>
                            Sous-Matière : @foreach ($annonce->sousMatieres  as $item)
                                <span>{{ $item->name }}</span>
                            @endforeach 
                        </p>
                        @if ($annonce->isIndividual)
                            <td><span class="badge badge-success">Individuel</span></td>                                
                        @else
                            <td><span class="badge badge-info">Collectif</span></td>
                        @endif
                        
                        <div class="button-container">
                            <form action="{{route("trash_annonce",["id"=>$annonce->id])}}" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item btn btn-danger" >Supprimer</button>
                            </form>
                            <form action="{{route("details_cours_formateur",["id"=>$annonce->id])}}" method="get">
                                @csrf
                                <button type="submit" class="btn btn-primary">Détails</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>	
            @endforeach
        
        </div>
@endsection