@extends('layouts.web')
@section('main')
    {{-- <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Basic Table</div>
                </div>
                <div class="card-body">
                    <div class="card-sub">
                       Voici la liste des cours auquels vous etes inscrit
                    </div>
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titre</th>
                                <th scope="col">Type</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($annonces as $annonce )
                            <tr>
                                <td>{{$annonce->id}}</td>
                                <td>{{ $annonce->title }}</td>
                                @if ($annonce->isIndividual)
                                    <td><span class="badge badge-success">Individuel</span></td>                                
                                @else
                                    <td><span class="badge badge-info">Collectif</span></td>
                                @endif
                                <td><div class="dropdown">

                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">

                                        Actions

                                    </button>

                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">

                                        <a class="dropdown-item" href="{{route("details_cours_inscrit",["id"=>$annonce->id])}}">Details</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>

                                    </ul>

                                </div></td>
                            </tr>   

                            @endforeach
                            
										
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}

    <div id="main-content" class="container mt-5 ">
        <h1>Mes cours réservés :</h1>
        <div class="row">
            @foreach ($annonces as $annonce)
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <span>{{$annonce->title}}</span>
                            
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <span>Formateur : {{$annonce->user->first_name}}</span><br>
                            <span>Emplacement : {{ $annonce->location }}</span>
                        </h6>
                        <p class="card-text">
                            Jour: {{ date('d/m/Y', strtotime($annonce->date)) }}<br>
                            Horaires: {{ substr($annonce->heure, 0, 5) }}<br>
                            Matière: {{$annonce->matiere->name}}<br>
                            Sous-matière: @foreach ($annonce->sousMatieres  as $item)
                                <span>{{ $item->name }}</span>
                            @endforeach 
                        </p>
                        @if ($annonce->isIndividual)
                            <td><span class="badge badge-success">Individuel</span></td>                                
                        @else
                            <td><span class="badge badge-info">Collectif</span></td>
                        @endif <br>
                        
                        <div class="button-container">
                            <button class="btn btn-primary" href="#" role="button">Annuler</button>
                            <form action="{{route("details_cours_inscrit",["id"=>$annonce->id])}}" method="get">
                                @csrf
                                <button type="submit" class="btn btn-primary">Détail</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>	
            @endforeach
        
        </div>
    </div>
@endsection
