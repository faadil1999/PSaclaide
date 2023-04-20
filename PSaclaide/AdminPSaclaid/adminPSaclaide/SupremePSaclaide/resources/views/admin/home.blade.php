@extends('layouts.web')
@section('main')
<div class="container rounded mt-5 mb-5" >

   
    <div class="card-body">
        <div class="card-sub">									
            Liste des utilisateurs:
        </div>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user["id"]}}</td>
                    <td>{{ $user["first_name"]}}</td>
                    <td>{{ $user["last_name"] }}</td>
                    <td><div class="dropdown">

                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">

                            Action

                        </button>

                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">

                            <a class="dropdown-item" href="#">Details user</a>
                            @if ($user["stateUser"] == 1)
                            <form action="{{route("ban_user",['id'=>$user["id"] ])}}" method="post">
                            
                                @csrf
                                <input type="text" name="name_user" value="{{"{$user["first_name"]} {$user["last_name"]}"}}" hidden>
                                <input type="text" name="email" value="{{$user["email"]}}" hidden>
                                <button class="dropdown-item text-danger" type="submit">Ban user</button>
                            </form>
                            
                            @else
                            <form action="{{route("restore_user",['id'=>$user["id"]])}}" method="post">
                                
                                @csrf
                                <input type="text" name="name_user" value="{{"{$user["first_name"]} {$user["last_name"]}"}}" hidden>
                                <input type="text" name="email" value="{{$user["email"]}}" hidden>
                                <button class="dropdown-item text-success" type="submit">Restore user</button>
                            </form>
                            
                            @endif
                           
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>

                        </ul></td>
                </tr>    
                @endforeach
              
            </tbody>
        </table>
    </div>
@endsection