@extends('layouts.web')
@section("main")


@vite('resources/css/app.css')
<div class="card" id="add_annonce">
    <link rel="stylesheet" href="{{asset("admin_assets/assets/css/creerannonce.css")}}" />
    <div class="card-header mt-5">
        <div class="card-title">Ajouter une annonce</div>
       
    </div>
    <add-annonce :user_auth="{{Auth::user()}}" :formateur_id="{{Auth::user()->formateur->id}}"> </add-annonce> 
    {{-- <ajout-annonce></ajout-annonce> --}}
    {{-- <form method="POST" action="{{ route('storeAnnonce') }}">
        @csrf
    <div class="card-body"> --}}
            {{-- <div class="form-check">
                <label>Type d'annonce</label><br/>
                <label class="form-radio-label">
                    <input class="form-radio-input" name="mode" type="radio" name="optionsRadios" value="modeInd"  checked="">
                    <span class="form-radio-sign">Individuel</span>
                </label>
                <label class="form-radio-label ml-3">
                    <input class="form-radio-input" name="mode" type="radio" name="optionsRadios" value="modeCol">
                    <span class="form-radio-sign">Collectif</span>
                </label>
            </div> --}}
        {{-- <div class="form-group">
            <label for="email">Titre</label>
            <input type="text" class="form-control"  name="title"   placeholder="Entrer le titre">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        --}}
        {{-- <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password">
        </div>
        <div class="form-group form-inline">
            <label for="inlineinput" class="col-md-3 col-form-label">Inline Input</label>
            <div class="col-md-9 p-0">
                <input type="text" class="form-control input-full" id="inlineinput" placeholder="Enter Input">
            </div>
        </div>
        <div class="form-group has-success">
            <label for="successInput">Success Input</label>
            <input type="text" id="successInput" value="Success" class="form-control">
        </div>
        <div class="form-group has-error has-feedback">
            <label for="errorInput">Error Input</label>
            <input type="text" id="errorInput" value="Error" class="form-control">
            <small id="emailHelp" class="form-text text-muted">Please provide a valid informations.</small>
        </div> --}}
        {{-- <div class="form-group">
            <label for="disableinput">Disable Input</label>
            <input type="text" class="form-control" id="disableinput" placeholder="Enter Input" disabled>
        </div> --}}
      
        {{-- <div class="form-group"> --}}
            {{-- <label class="control-label">
                Static
            </label> <!----> <p class="form-control-static">hello@themekita.com</p> <!---->  <!----></div> --}}
            {{-- <div class="form-group">
                <label for="exampleFormControlSelect1">Matières</label>
               
                    <select class="form-control" name="matiere">
                        @foreach ($matieres as $matiere)
                            <option value="{{ $matiere->id }}">{{ $matiere->name }}</option>
                        @endforeach
                        </select>
               
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date">
        
                <label for="time">Horaire:</label>
                <input type="time" id="time" name="time">
            </div> --}}
            {{-- <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div> --}}
            {{-- <div class="form-group">
                <label for="comment">Description</label>
                <textarea class="form-control" id="desc" type="textarea" name="description" rows="5">

                </textarea>
            </div> --}}
            {{-- <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" value="">
                    <span class="form-check-sign">Agree with terms and conditions</span>
                </label>
            </div> --}}
        {{-- </div>
        <div class="card-action">
            <button class="btn btn-success" type="submit" >Submit</button>
            <button class="btn btn-danger">Cancel</button>
        </div>
    </form> --}}
    {{-- </div> --}}
</div>
@vite('resources/js/app.js')
@endsection