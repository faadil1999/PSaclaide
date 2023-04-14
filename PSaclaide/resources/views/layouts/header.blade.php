<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <title>Page principale</title>
        <link rel="stylesheet" href="auth_assets/css/annonce.css">
    </head>
    @vite('resources/css/app.css')
    
    <header id="admin_management">
        <div class="logo">
            <img src="auth_assets/images/logodetoure.png" alt="logopsaclaide" height="50" />
        </div>
            <nav class="nav-right">
                <toggle-button :user_auth="{{Auth::user()}}"></toggle-button>
                <a id="logout" class="dropdown-item" href="auth-normal-sign-in.html"
                                    onclick="event.preventDefault(); document.getElementById('form_logout').submit()"><i
                                        class="fa fa-power-off"></i> Logout</a>       
                <div class="profile-container">
                    <img src="auth_assets/images/test.jpg" alt="Profil" class="profile-picture" />
                    <show-element>
                        <div class="dropdown-menu">
                            <a href="/newAnnonce">Création annonce</a>
                            <a href="/">Mes Cours</a>
                            <a href="/dashboard">Tableau de bord</a>
                            <a href="/option">Options</a>
                        </div>
                    </show-element>
                    <show-student-element>
                        <div class="dropdown-menu">
                            <a href="/newAnnonce">Annonce en ligne</a>
                            <a href="/">Cours validé</a>
                            <a href="/dashboard">Tableau de bord</a>
                            <a href="/option">Options</a>
                    </div> </show-student-element>
                </div>
            </nav>
                
        </header>
        @vite('resources/js/app.js')    
    <body>
        @yield("main")
    </body>
    <form action="{{ route('logout') }}" method="POST" id="form_logout">
        @csrf
    </form>
</html>