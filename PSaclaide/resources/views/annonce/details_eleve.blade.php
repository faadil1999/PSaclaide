@extends("layouts.web")
@section("main")
  
<form method="POST" action="{{ route('modifierAnnonce', ['id' => $annonce->id]) }}">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{ $annonce->id }}">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Base Form Control</div>
                <h2>Détails du cours</h2>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Titre</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Titre de l'annonce" value="{{$annonce->title}}" readonly>
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" id="author" name="author" placeholder="Nom de l'auteur" value="{{ $annonce->author }}" readonly>
                </div>
                <div class="form-group">
                    <label for="date">Date</label>
                        <input type="date" class="form-control" id="date" name="date" placeholder="Date de l'annonce" value="{{$annonce->date}}" readonly>
                </div>
                <div class="form-group">
                    <label for="heure">Heure</label>
                        <input type="time" class="form-control" id="heure" name="heure" placeholder="Heure de l'annonce" value="{{$annonce->heure}}" readonly>                    
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location" placeholder="Lieu de l'annonce" value="{{$annonce->location}}" readonly>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="5" placeholder="Description de l'annonce" readonly>{{$annonce->description}} </textarea>
                </div>
            </div>
            <div class="card-action">
                <a href="{{ route('cours_inscrit') }}" class="btn btn-danger">Retour</a>
            </div>
        </div>
    </div>
</form>

@endsection