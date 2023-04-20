<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Vous avez été banni</title>
    <link rel="stylesheet" href="{{asset("auth_assets/css/verifstyle.css")}}">
</head>

<body>
    <div class="container">
        <h1>Vous avez été banni</h1>
        <p>Je suis désolé de vous informer que votre compte a été banni. Nous avons constaté une violation de nos conditions d'utilisation et de nos politiques, ce qui a entraîné la suspension de votre compte. Si vous pensez qu'il s'agit d'une erreur, veuillez contacter notre équipe de support pour plus d'informations. Nous sommes désolés pour tout inconvénient que cela pourrait causer.</p>
        <a href="auth-normal-sign-in.html" onclick="event.preventDefault(); document.getElementById('form_logout').submit()">
             Decconexion
        </a>
        
        <form action="{{ route('logout') }}" method="POST" id="form_logout">
            @csrf
        </form>
    </div>
</body>

</html>
