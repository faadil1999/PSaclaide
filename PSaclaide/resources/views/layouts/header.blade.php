<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Page principale</title>
    <link rel="stylesheet" href="{{asset("admin_assets/assets/css/annonce.css")}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      
</head>

<body>
    @vite('resources/css/app.css')
   
  
        <header>
            <nav class="navbar navbar-light justify-content-between">
       
                <a class="navbar-brand" href="{{ route('home')}}">
                    <img src="{{asset("admin_assets/assets/images/logodetoure.png")}}" width="60" height="60" class="d-inline-block align-top" alt="">
                </a>
          
            <div class="profile-container">
                
                <div class="nav-item dropdown mx-4">
                    <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img id="imgprofil" class="img-fluid" src="{{asset("admin_assets/assets/images/logouniv.png")}}">{{Auth::user()->first_name}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="/home">Tableau de bord</a>
                      <a href="auth-normal-sign-in.html" onclick="event.preventDefault(); document.getElementById('form_logout').submit()">Déconnexion</a>                      
                    </div>
                  </div>
                </div>
            
              </nav>
            
        </header>
        {{-- <input type="search" class="search-input" placeholder="Recherche..." logo=""/>
   --}}
    
    <div class="main-container"  id="admin_management">
        
        <div class="filters-container">
            <form method="POST" action="{{ route('filtreAnnonce') }}">
                @csrf
                <h3>Filtres</h3>
                    
                <div class="sub-filter">
                    <h4>Jour</h4>
                    <div class="checkbox-container">
                        <input type="date" name="data[]" id="dateselect">   
                    </div>
                    <br>
                    <h4>Heure</h4>
                    <div class="checkbox-container">
                        <label><input type="checkbox" name="horaire[]" id="8" value="8"> 8h00 - 9h00</label>
                        <label><input type="checkbox" name="horaire[]" id="8"value="9"> 9h00 - 10h00</label>
                        <nav id="filtresheure">
                            
                            <div id="horaires" style="display:none;">
                                @for ($i = 10; $i < 24; $i++)
                                    <label><input type="checkbox" name="horaire[]" value="{{$i}}"> {{$i}}h00 - {{$i+1}}h00</label>
                                @endfor
                            </div>

                            <script>
                            function toggleHoraires() {
                                var horaires = document.getElementById("horaires");
                                var bouton = document.getElementById('bouton-afficher');
                                if (horaires.style.display === 'none') {
                                    horaires.style.display = 'block';
                                    bouton.textContent = 'Réduire';
                                } else {
                                    horaires.style.display = 'none';
                                    bouton.textContent = 'Tout afficher';
                                }
                            }
                            </script>
                            <button form="" aria-expanded="false" id="bouton-afficher" onclick="toggleHoraires()" style="color:#FF416C;">Tout afficher</button>
                        </nav>  
                    </div>
                </div>    
                <div class="sub-filter">
                    <h4>École</h4>
                    <div class="checkbox-container">
                    @foreach($departements as $departement)
                        @if ($loop->iteration <= 2)
                            <label><input type="checkbox" name="ecole[]" value="{{$departement->name}}"> {{$departement->name}} </label>
                        @else
                            <div id="departement{{$loop->iteration}}" style="display:none; ">
                                <label><input type="checkbox" name="ecole[]" value="{{$departement->name}}"> {{$departement->name}} </label>  
                            </div>                        
                        @endif
                    @endforeach

                    <script>
                        function toggleDep() {
                            var dep = document.getElementById("departement3");
                            var bouton = document.getElementById('bouton-afficher-dep');
                            var etat = true;
                            if (dep.style.display === 'none') {
                                etat = true;
                                bouton.textContent = 'Réduire';
                            } else {
                                etat = false;
                                bouton.textContent = 'Tout afficher';
                            }
                            
                            for (var i = 3; i <= 15; i++) {
                                if (etat == true) {
                                    document.getElementById("departement"+i).style.display = 'block';
                                } else {
                                    document.getElementById("departement"+i).style.display = 'none';
                                }
                            }   
                        }
                    </script>
                    <button form="" aria-expanded="false" id="bouton-afficher-dep" onclick="toggleDep()" style="color:#FF416C;">Tout afficher</button>
                    </div>
                </div>

                <div class="sub-filter">
                    <h4>Matière</h4>
                    <div class="checkbox-container">
                    @foreach($matieres as $matiere)
                        @if ($loop->iteration <= 2)
                            <label><input type="checkbox" name="matiere[]" value="{{$matiere->name}}"> {{$matiere->name}} </label>
                        @else
                            <div id="matiere{{$loop->iteration}}" style="display:none; ">
                                <label><input type="checkbox" name="matiere[]" value="{{$matiere->name}}"> {{$matiere->name}} </label>  
                            </div>                        
                        @endif
                    @endforeach

                    <script>
                        function toggleMap() {
                            var mat = document.getElementById("matiere3");
                            var bouton = document.getElementById('bouton-afficher-dep');
                            var etat = true;
                            if (mat.style.display === 'none') {
                                etat = true;
                                bouton.textContent = 'Réduire';
                            } else {
                                etat = false;
                                bouton.textContent = 'Tout afficher';
                            }
                            
                            for (var i = 3; i <= 25; i++) {
                                if (etat == true) {
                                    document.getElementById("matiere"+i).style.display = 'block';
                                } else {
                                    document.getElementById("matiere"+i).style.display = 'none';
                                }
                            }   
                        }
                    </script>
                    <button form="" aria-expanded="false" id="bouton-afficher-dep" onclick="toggleMap()" style="color:#FF416C;">Tout afficher</button>
                    </div>
                </div>
                <div class="sub-filter" style="margin-bottom:10px;">
                    <h4>Type de cours</h4>
                    <div class="checkbox-container">
                        <label><input type="checkbox" name="type[]" value="Individuel" <?php if(isset($_POST['type']) && in_array('Individuel', $_POST['type'])) echo 'checked'; ?>> Individuel</label>
                        <label><input type="checkbox" name="type[]" value="Collectif"  <?php if(isset($_POST['type']) && in_array('Collectif',  $_POST['type'])) echo 'checked'; ?>> Collectif </label>
                    </div>
                </div>            

                <button class="confirm-button" type="submit"> Rechercher </button>
            </form>
        </div>
        
        <div class="results-container">
            <h3>Résultats de la recherche</h3>
            @yield("main")
            
        </div>
            <!-- Ajoutez plus de résultats ici -->
        </div>
    </div>
    <script src="{{("admin_assets/assets/script.js")}}" charset="utf-8"></script>
    
    @vite('resources/js/app.js')  
</body>

</html>

 <form action="{{ route('logout') }}" method="POST" id="form_logout">
    @csrf
</form>