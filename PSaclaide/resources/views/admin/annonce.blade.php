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
  <div class="search-container">
    <input type="text" class="search-input" placeholder="Recherche..." />
  </div>
  <div class="main-container">
    <div class="filters-container">
      <h3>Filtres</h3>
      <div class="sub-filter">
        <h4>Horaire</h4>
        <div class="checkbox-container">
          @for ($i = 8; $i < 21; $i++) <label><input type="checkbox" name="horaire" value="{{$i}}"> {{$i}}h00 - {{$i+1}}h00</label>
            @endfor
        </div>
      </div>
      <div class="sub-filter">
        <h4>École</h4>
        <div class="checkbox-container">
          @foreach ($departements as $departement)
          <label><input type="checkbox" name="ecole" value="{{ $departement->name }}"> {{ $departement->name }} </label>
          @endforeach
        </div>
      </div>

      <div class="sub-filter">
        <h4>Type de cours</h4>
        <div class="checkbox-container">
          <label><input type="checkbox" name="type" value="Individuel"> Individuel</label>
          <label><input type="checkbox" name="type" value="Collectif"> Collectif</label>
        </div>
      </div>
    </div>

    <div class="results-container">
      <h3>Résultats de la recherche</h3>
      <div class="container">
        <div class="row">
          @foreach ($annonces as $annonce)
          @if ($annonce->author != Auth::user()->email)
          <div class="result-card col-md-4 mb-4">
            <div class="card h-100"><img class="card-img-top w-100" src="assets/img/departement/{{$annonce->user()->departement()->picture}}" alt="courses" />
              <div class="card-body">
                <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">{{ $annonce->title }}</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern Art</a>
                @if ($annonce->isAmongStudent(Auth::user()->student->id))
                <button type="text" class="btn btn-warning">Deja inscrit</button>
                @else
                <form action="{{ route('subscribe',['id'=>$annonce->id]) }}" method="post">
                  @csrf
                  <button type="submit" class="btn btn-primary btn-round">S'inscrire</button>
                </form>
                @endif


              </div>
            </div>
          </div>
          @endif

          @endforeach

          <div class="result-card col-md-4 mb-4">
            <div class="card h-100"><img class="card-img-top w-100" src="assets/img/gallery/critical-thinking.png" alt="courses" />
              <div class="card-body">
                <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Introduction to Logic and Critical Thinking</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">Duke University</a>
              </div>
            </div>
          </div>
          <div class="result-card col-md-4 mb-4">
            <div class="card h-100"><img class="card-img-top w-100" src="assets/img/gallery/art-design.png" alt="courses" />
              <div class="card-body">
                <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Modern and Contemporary Art and Design</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern Art</a>
              </div>
            </div>
          </div>
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
    </div>
    <!-- Ajoutez plus de résultats ici -->
  </div>
  </div>
  <script src="{{asset("auth_assets/js/script.js")}}" charset="utf-8"></script>
  <link rel="stylesheet" href="{{ asset('admin_assets/assets/css/bootstrap.min.css') }}">
      

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
