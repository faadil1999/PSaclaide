<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Page principale</title>
    <link rel="stylesheet" href="{{asset("auth_assets/css/annonce.css")}}">
</head>

<body>
    <header>
        <button id="logout">
            <a class="dropdown-item" href="auth-normal-sign-in.html" onclick="event.preventDefault(); document.getElementById('form_logout').submit()"><i class="fas fa-sign-out-alt"></i> Déconnexion </a>
            <form action="{{ route('logout') }}" method="POST" id="form_logout">
                @csrf
            </form>
        </button>
        <div class="profile-container">
            <!--<img src="test.jpg" alt="Photo de profil" class="profile-picture" />-->
            <div class="dropdown-menu">
                <a href="#">Options</a>
                <a href="#">Mes Cours</a>
                <a href="#">Tableau de bord</a>
            </div>
        </div>
    </header>
    @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
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
                    <label><input type="checkbox" name="horaire" value="8"> 8h00 - 9h00</label>
                    <label><input type="checkbox" name="horaire" value="9"> 9h00 - 10h00</label>
                    <label><input type="checkbox" name="horaire" value="10"> 10h00 - 11h00</label>
                    <label><input type="checkbox" name="horaire" value="11"> 11h00 - 12h00</label>
                    <label><input type="checkbox" name="horaire" value="12"> 12h00 - 13h00</label>
                    <label><input type="checkbox" name="horaire" value="13"> 13h00 - 14h00</label>
                    <label><input type="checkbox" name="horaire" value="14"> 14h00 - 15h00</label>
                    <label><input type="checkbox" name="horaire" value="15"> 15h00 - 16h00</label>
                    <label><input type="checkbox" name="horaire" value="16"> 16h00 - 17h00</label>
                    <label><input type="checkbox" name="horaire" value="17"> 17h00 - 18h00</label>
                    <label><input type="checkbox" name="horaire" value="18"> 18h00 - 19h00</label>
                    <label><input type="checkbox" name="horaire" value="19"> 19h00 - 20h00</label>
                    <label><input type="checkbox" name="horaire" value="20"> 20h00 - 21h00</label>
                </div>
            </div>
            <div class="sub-filter">
                <h4>École</h4>
                <div class="checkbox-container">
                    <label><input type="checkbox" name="ecole" value="Polytech"> Polytech</label>
                    <label><input type="checkbox" name="ecole" value="Centrale"> Centrale</label>
                    <label><input type="checkbox" name="ecole" value="ENS"> L'ENS</label>
                    <label><input type="checkbox" name="ecole" value="Universite Paris-Saclay"> Université Paris-Saclay</label>
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
                  <div class="result-card col-md-4 mb-4">
                    <div class="card h-100"><img class="card-img-top w-100" src="assets/img/gallery/design.png" alt="courses" />
                      <div class="card-body">
                        <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">{{ $annonce->title }}</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern Art</a>
                        <form action="{{ route('subscribe',['id'=>$annonce->id]) }}" method="post">
                          @csrf
                            <button type="submit" class="btn btn-primary btn-round">S'inscrire</button>
                        </form>
                        
                      </div>
                    </div>
                  </div>
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
</body>

</html>

<style>
   .grid-container {
        display: grid;
        grid-template-columns: auto auto auto;
    }

    .grid-item {
 
    
    text-align: center;
    }
</style>