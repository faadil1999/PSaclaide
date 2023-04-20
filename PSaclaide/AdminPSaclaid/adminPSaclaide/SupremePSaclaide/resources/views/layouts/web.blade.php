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
		<link rel="stylesheet" href="{{asset("admin_assets/css/stylesidebar.css")}}">
		<link rel="stylesheet" href="{{asset("admin_assets/css/style.css")}}">
	</head>
	<body>
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
					<a href="#" class="img logo rounded-circle mb-5" style="background-image: url({{asset("admin_assets/images/logo.png")}});"></a>
					<ul class="list-unstyled components mb-5">
						<li>
							<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" >Mon profil</a>
						</li>
						<li>
							<a href="#">List Users</a></li>
						<li>
							<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" >Historique</a>
						</li>
						<li>
							<a href="#"></a>
						</li>
						<li class="active">
							<a href="#">à propos</a>
						</li>
						<div class="space"></div>
						
					</ul>
					
				</div>
			</nav>
			<!-- Page Content  -->
			<div id="content" class="p-4 p-md-5">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<div class="container-fluid">
						<button type="button" id="sidebarCollapse" class="btn btn-primary">
							<i class="fa fa-bars"></i>
							<span class="sr-only">Toggle Menu</span>
						</button>
						<button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <h3 class="txt txt-primary mx-auto" id="cours">ADMIN PSaclaide</h3>
							
						</div>
					</div>
				</nav>
                @if (session('status'))
                <div class="alert alert-success">
                  {{ session('status') }}
                </div>
                @endif
				@yield('main')
               
                  </div>
			</div>
		</div>
	</div>
</div>
<script src="{{asset("admin_assets/js/jquery.min.js")}}"></script>
<script src="{{asset("admin_assets/js/popper.js")}}"></script>
<script src="{{asset("admin_assets/js/bootstrap.min.js")}}"></script>
<script src="{{asset("admin_assets/js/main.js")}}"></script>

</body>
</html>
