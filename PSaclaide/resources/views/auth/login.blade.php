
<!DOCTYPE html>    
<html lang "fr"> 
    


<head> 
    <meta charset="utf-8"/>
    <title>Formulaire</title>
    <link rel="stylesheet" href="{{asset("auth_assets/css/style.css")}}">
</head>



<h2>Bienvenue sur PSaclaide !</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
        <form method="POST" action="{{ route('register') }}" class="signin-form">
            @csrf
			<h1>Créer un compte</h1>
			<input type="email" placeholder="Email" name="email"/>
			<input type="password" placeholder="Mot de passe" name="password"/>
			<input type="password" placeholder="Confirmez votre mot de passe" name="password_confirmation"/>
            
			<button type="submit">S'inscrire</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
        <form method="POST" action="{{ route('login') }}" class="signin-form">
            @csrf
            <h1>Connexion</h1>
			<input type="email" placeholder="Email" name="email"/>
			<input type="password" placeholder="Mot de passe" name="password"/>
			<a href="#">Mot de passe oublié ?</a>
			<button type="submit">Connexion</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Heureux de vous revoir !</h1>
				<p>Pour vous connecter, veuillez entrer vos informations personnelles</p>
				<button class="ghost" id="signIn">Connexion</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Bienvenue !</h1>
				<p>Entrez vos informations personnelles et commencez votre aventure avec nous</p>
				<button class="ghost" id="signUp">S'inscrire</button>
			</div>
		</div>
    </div>
</div>
@if ($errors->has('email'))
<div class="erreur-container" id="container">
	<div class="error" style="color: red">
		<strong>{{ $errors->first('email') }}</strong>
	</div>
</div>
@elseif ($errors->has('password'))
<div class="erreur-container" id="container">
	<div class="error" style="color: red">
		<strong>{{ $errors->first('password') }}</strong>
	</div>
</div>
@elseif ($errors->has('password_confirmation'))
<div class="erreur-container" id="container">
	<div class="error" style="color: red">
		<strong>{{ $errors->first('password_confirmation') }}</strong>
	</div>
</div>
@endif

<script src="{{asset("auth_assets/js/script.js")}}" charset="utf-8"></script>

</html>