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
                            <span>Cours de mathématiques</span>
                            <span>Algèbre linéaire</span>
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <span>élève : Hugues Martin</span><br>
                            <span>Salle : B120 Polytech</span>
                        </h6>
                        <p class="card-text">
                            Durée du cours : 2h30<br>
                            horaires : 14h30-17h<br>
                            Jour : 14/05
                        </p>
                        @if ($annonce->isIndividual)
                        <td><span class="badge badge-success">Individuel</span></td>                                
                    @else
                        <td><span class="badge badge-info">Collectif</span></td>
                    @endif
                        <button class="btn btn-default" href="#" role="button">Annuler</button>
                    </div>
                </div>
            </div>	
            @endforeach
        
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <span>Cours de mathématiques</span>
                            <span>Dérivés</span>
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <span>élève : Mathis Chevalier</span><br>
                            <span>Salle à définir</span>
                        </h6>
                        <p class="card-text">
                            Durée du cours : 1h<br>
                            horaires : 10h-11h<br>
                            Jour : 14/05
                        </p>
                        <button class="btn btn-default" href="#" role="button">Annuler</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <span>Cours de Physique</span>
                            <span>Thermodynamique</span>
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <span>élèves : Doballah Mehdi; Amrouche Mourad</span><br>
                            <span>Salle : Hall central</span>
                        </h6>
                        <p class="card-text">
                            Durée du cours : 1h30<br>
                            horaires : 18h-19h30<br>
                            Jour : 14/05
                        </p>
                        <button class="btn btn-default" href="#" role="button">Annuler</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <span>Cours de Physique</span>
                            <span>Thermodynamique</span>
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <span>élèves : Doballah Mehdi; Amrouche Mourad</span><br>
                            <span>Salle : Hall centrale</span>
                        </h6>
                        <p class="card-text">
                            Durée du cours : 1h30<br>
                            horaires : 13h30-15h<br>
                            Jour : 14/05
                        </p>
                        <button class="btn btn-default" href="#" role="button">Annuler</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
