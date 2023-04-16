@extends('layouts.web')
@section('main')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Mes annonces</div>
                </div>
                <div class="card-body">
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
                                        <form action="{{route("trash_annonce",["id"=>$annonce->id])}}" method="post">
                                            @csrf
                                        <button type="submit" class="dropdown-item btn btn-danger" >Delete</button>
                                    </form>
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
    </div>
@endsection
