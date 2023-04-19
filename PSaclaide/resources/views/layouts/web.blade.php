<!doctype html>
<html lang="en">
	<head>
		<title>apropos_dashboard</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> 
		<link rel="stylesheet" href="{{asset("admin_assets/assets/css/stylesidebar.css")}}">
		<link rel="stylesheet" href="{{asset("admin_assets/assets/css/style.css")}}">
	</head>
	<body>
        @vite('resources/css/app.css')
		<div class="wrapper d-flex align-items-stretch"  id="admin_management">
           
			<nav id="sidebar">
				<div class="p-4 pt-5">
					<a href="{{ route('home')}}" class="img logo rounded-circle mb-5" style="background-image: url({{asset("admin_assets/assets/images/logo.png")}});"></a>
					<ul class="list-unstyled components mb-5">
						<li>
							<a href="{{ route('option')}}">Mon profil</a>
						</li>
                        <show-element>
                            <li>
                                <a href="{{ route('form_annonce') }}">
                                    Créer annonce 
                                </a>
                            </li>
                        </show-element>
                        <show-element>
                            <li>
                                <a href="{{route('mesannonces')}}">
                                    Mes cours
                                </a>
                            </li>
                        </show-element>
                        <show-element>
                            <li>
                                <a href="{{route('corbeille')}}">
                                    Ma corbeille    
                                </a>
                            </li>
                        </show-element>
                        <show-student-element>
                            <li>
                                <a href="{{route("listeAnnonce")}}">
                                    Cours disponibles
                                </a>
                            </li>
                        </show-student-element>
                        <show-student-element>
                            <li>
                                <a href="{{route("cours_inscrit")}}">
                                    Cours inscrits
                                </a>
                            </li>
                        </show-student-element>
                     
						<li>

							<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" >Historique</a>
						</li>
						<li>
							<a href="auth-normal-sign-in.html" onclick="event.preventDefault(); document.getElementById('form_logout').submit()">
                                <i class="ti-layout-sidebar-left"></i> Logout
                            </a>
                            
                            <form action="{{ route('logout') }}" method="POST" id="form_logout">
                                @csrf
                            </form>
						</li>
						
						<div class="space"></div>
						{{-- <li>
							<div class = slider>
								<a href="#" class="btn btn-primary btn-lg active" id = "slider1" role="button" aria-pressed="true">Mode élève</a>
								<div class="space"></div>
								<a href="#" class="btn btn-primary btn-lg" role="button" id="slider2" aria-pressed="true">Mode professeur</a>
							</div>
						</li> --}}
                        <li class="nav-item">
                            <toggle-button :user_auth="{{Auth::user()}}"></toggle-button>
                        </li>
					</ul>
					
				</div>
			</nav>
            <div id="content" class="p-4 p-md-5">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<div class="container-fluid">
						<button type="button" id="sidebarCollapse" class="btn btn-primary">
							<i class="fa fa-bars"></i>
							<span class="sr-only">Toggle Menu</span>
						</button>
						<button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="nav navbar-nav ml-auto">
                                <show-student-element>
                                    <li class="nav-item active"><button class="btn btn-primary" id="cours" href="{{route('listeAnnonce')}}">Réserver un cours</a></li>
                                </show-student-element>
                                
								<div class="space"></div>
								<show-element>
                                    <li class="nav-item active"><button class="btn btn-primary" id="cours" href="{{ route('form_annonce') }}">Créer une annonce</a></li>
								</show-element>
                                    <div class="space"></div>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img id="imgprofil" class="img-fluid" src="{{asset("admin_assets/assets/images/logopolytech.png")}}">{{Auth::user()->first_name}}</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">

										<a class="dropdown-item" href="/home">Profil</a>
										
										<a class="dropdown-item" href="auth-normal-sign-in.html" onclick="event.preventDefault(); document.getElementById('form_logout').submit()">Déconnexion</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</nav>
				@yield("main")
               
                </div>
			</div>
		
	

@vite(['resources/js/app.js','/public/admin_assets/assets/js/popper.js',
'/public/admin_assets/assets/js/main.js'])
<script src="{{asset("admin_assets/assets/js/jquery.min.js")}}"></script>
<script src="{{asset("admin_assets/assets/js/popper.js")}}"></script>
<script src="{{asset("admin_assets/assets/js/bootstrap.min.js")}}"></script>
<script src="{{asset("admin_assets/assets/js/main.js")}}"></script>
<script src="{{asset("admin_assets/assets/js/index.js")}}"></script>


</body>
</html>


