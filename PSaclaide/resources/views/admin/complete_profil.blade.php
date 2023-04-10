<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="{{asset("auth_assets/css/profil.css")}}">
</head>

<body>
    <div class="container">
        <h2>Complétez votre profil afin de finaliser votre inscription</h2>
        <form method="POST" action="{{route('completerProfil')}}">
        @csrf
            <input type="text" placeholder="Nom" name="prenom" required />
            <input type="text" placeholder="Prénom" name="nomFamille" required />
            <div>
                <label for="departement">Departement</label>
                <select name="departement">
                @foreach ($departements as $departement)
                    <option value="{{ $departement->name }}">{{ $departement->name }}</option>
                @endforeach
                </select>
            </div>
        
            <div>
                <label for="anneeEtude">Année d'étude</label>
                <select name="anneeEtude">
                @for($i = 1; $i < 6; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
                </select>
            </div>
            <label class="checkbox-container">
                Je souhaite également être professeur
                <input type="checkbox" name="prof"/>
                <span class="checkmark"></span>
            </label>
            <button type="submit">Finaliser mon inscription</button>
        </form>
    </div>
</body>

</html>
