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
       
                <a class="navbar-brand" href="#">
                    <img src="{{asset("admin_assets/assets/images/logodetoure.png")}}" width="60" height="60" class="d-inline-block align-top" alt="">
                    
                  </a>
                  
                <div class="form-inline">
                   <button id="switch" class="switch-btn">Passer en professeur</button>
          
            <div class="profile-container">
                
                <div class="nav-item dropdown mx-4">
                    <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     User
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Deconnexion</a>
                      <a class="dropdown-item" href="/home">Tableau de bord</a>
                      
                    </div>
                  </div>
                </div>
            
              </nav>
            
        </header>
        {{-- <input type="search" class="search-input" placeholder="Recherche..." logo=""/>
   --}}
    
    <div class="main-container"  id="admin_management">
        
        <div class="filters-container">
            <h3>Filtres</h3>
                
            <div class="sub-filter">
                <h4>jour</h4>
                <div class="checkbox-container">
                    <input type="date" name="data[]" id="dateselect">   
                </div>
                <h4>Horaire</h4>
                <div class="checkbox-container">
                    <label><input type="checkbox" name="horaire" id="8" value="8"> 8h00 - 9h00</label>
                    <label><input type="checkbox" name="horaire" id="8"value="9"> 9h00 - 10h00</label>
                    <nav id="filtresheure">
                        <button aria-expanded="false" id="">Tout afficher</button>
                        <ul hidden>
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
                        </ul>
                    </nav>  
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