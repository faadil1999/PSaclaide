@extends("layouts.header")

@section("main")

  @if (session('status'))
  <div class="alert alert-success">
    {{ session('status') }}
  </div>
  @endif
  @if (session('error'))
  <div class="alert alert-danger">
    {{ session('error') }}
  </div>
  @endif
 
 
      <div class="container">
        <div class="row">
          @foreach ($annonces as $annonce)
          @if ($annonce->author != Auth::user()->email)
          <div class="result-card col-md-4 mb-4">
            <div class="card h-100" style="position:relative;">
              <img class="card-img-top w-100" src="assets/img/departement/{{$annonce->user->departement->picture}}" style="height:150px;" alt="courses" />
              @if ($annonce->isIndividual == 1)
                <div style="position:absolute; top:55%; left:50%; transform:translate(-50%,-50%); color:green;">Individuel</div>
              @else  
                <div style="position:absolute; top:55%; left:50%; transform:translate(-50%,-50%); color:blue;">Collectif</div>
              @endif
              <div class="card-body">
                <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">{{ $annonce->title }}</h5><a class="text-muted fs--1 stretched-link text-decoration-none" >{{ $annonce->matiere->name }}</a>
                @if ($annonce->isAmongStudent(Auth::user()->student->id))
                <button type="text" class="btn btn-warning">Deja inscrit</button>
                @else
                <form action="{{ route('subscribe',['id'=>$annonce->id]) }}" method="post">
                  @csrf
                  <button type="submit" class="btn btn-primary btn-round"to>S'inscrire</button>
                </form>
                @endif


              </div>
            </div>
          </div>
          @endif

          @endforeach

        </div>
      </div>
      {{--
                <div class="result-card">
                    <img src="/assets/img/departement/Centrale.png" alt="Photo du professeur" class="teacher-picture" />
                </div> --}}
      {{-- <div class="info-container">
                    <h4>Nom du professeur</h4>
                    <p>Matière enseignée</p>
                    <p>École</p>
                </div> --}}
      {{-- <div class="result-card">
                    <img src="/assets/img/departement/ENS.png" alt="Photo du professeur" class="teacher-picture" />
                </div>
                <div class="result-card">
                    <img src="/assets/img/departement/Centrale.png" alt="Photo du professeur" class="teacher-picture" />
                </div> --}}
      {{-- <div class="info-container">
                    <h4>Nom du professeur</h4>
                    <p>Matière enseignée</p>
                    <p>École</p>
                </div> --}}
      {{-- <div class="result-card">
                    <img src="/assets/img/departement/ENS.png" alt="Photo du professeur" class="teacher-picture" />
                </div> --}}
      {{-- <div class="info-container">
                    <h4>Nom du professeur</h4>
                    <p>Matière enseignée</p>
                    <p>École</p>
                </div> --}}

    <!-- Ajoutez plus de résultats ici -->

  </div>



<style>
  .grid-container {
    display: grid;
    grid-template-columns: auto auto auto;
  }

  .grid-item {

    text-align: center;
  }
</style>
@endsection
