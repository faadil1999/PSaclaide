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
            <label id="categorie" for="prenom">Prénom : </label>
            <input type="text" placeholder="Votre Prénom" name="prenom" required />
            <label id="categorie" for="nom">Nom : </label>
            <input type="text" placeholder="Votre Nom" name="nomFamille" required />
            <div>
                <label id="categorie" for="departement">Département : </label>
                <select name="departement" required>
                    <option value="" disabled selected>Département</option>
                @foreach ($departements as $departement)
                    <option value="{{ $departement->name }}">{{ $departement->name }}</option>
                @endforeach
                </select>
            </div>
        
            <div>
                <label id="categorie" for="anneeEtude">Année d'étude :</label>
                <select name="anneeEtude" required>
                    <option value="" disabled selected>Année d'étude</option>
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
