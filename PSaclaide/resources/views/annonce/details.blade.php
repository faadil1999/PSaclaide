@extends("layouts.web")
@section("main")
  

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Base Form Control</div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="email">Titre</label>
                <input type="email" class="form-control" id="email" placeholder="Enter Email" value="{{$annonce->title }}" readonly>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" class="form-control" id="author" value="{{ $annonce->author }}">
            </div>
            
            <div class="form-group">
                <label for="successInput">Date et heure</label>
                <input type="text" id="successInput" value="{{"$annonce->date $annonce->heure"}}" class="form-control">
            </div>
           

            <div class="form-group">
                <label for="successInput">Location</label>
                <input type="text" id="successInput" value="{{"$annonce->location"}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="successInput">Matieres</label>
                <input type="text" id="successInput" value="{{ $annonce->matiere->name }}" class="form-control">
            </div>


            <div class="form-group">
                <label for="errorInput">Type d'annonce</label>
                <div>  @if ($annonce->isIndividual)
                                    <span class="badge badge-success">Individuel</span>                                
                                @else
                                    <span class="badge badge-info">Collectif</span>
                                @endif</div>
            </div>
           
            <div class="form-group">
                <label class="control-label">
                    Static
                </label> <!----> <p class="form-control-static">hello@themekita.com</p> <!---->  <!----></div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Sous matieres</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    @foreach ($annonce->sousMatieres as $item)
                        <option>{{$item->name}}</option>
                    @endforeach
                        
                      
                    </select>
                </div>
              
              
                <div class="form-group">
                    <label for="comment">Description</label>
                    <textarea class="form-control" id="comment" rows="5">
                        {{$annonce->description}}
                    </textarea>
                </div>
            
            </div>
            <div class="card-action">
                <button class="btn btn-success">Submit</button>
                <button class="btn btn-danger">Cancel</button>
            </div>
        </div>
    </div>
</div>

@endsection