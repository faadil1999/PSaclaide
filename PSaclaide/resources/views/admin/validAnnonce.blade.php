<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Validation de réservation</title>
    <link rel="stylesheet" href="auth_assets/css/validAnnonce.css">
</head>

<body>
    <img src=".auth_assets/images/logodetoure.png" alt="logopsaclaide" height="200" width="200" />
    <div class="container">
        <h1>Vous êtes sur le point de réserver un cours</h1>
        <p>Après validation, vous recevrez un email sur votre boîte mail universitaire récapitulant les informations du cours.</p>
        <p>Voici Vos détails de réservation :</p>
        <php
            <br>
            echo 'nom : ' .$_POST["nom"].<br>
            echo 'prenom : ' .$_POST["prenom"].<br>
            echo 'departement : ' .$_POST["departement"].<br>
            echo 'matiere' : ' .$_POST["matiere"]'<br>
            echo 'logo' : '.$_GET[universitu_logo]'<br>
            echo 'horaires' : '.$_GET[horaires]'<br>
             
        >
        <br>

        
        <div class="button">    
            <button class="ghost" id="annuler" onclick="Annonce/annonce.html">Annuler</button>
            <button class="ghost" id="validation"onclick="Dashboard/dashboard.html">Validation</button>
        </div>
    </div>
    

</body>

</html>
