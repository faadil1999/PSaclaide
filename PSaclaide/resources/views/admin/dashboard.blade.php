<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="auth_assets/css/dashboard.css">
</head>
<body>
    <header>
        <button id="logout">
            <i class="fas fa-sign-out-alt"></i> Déconnexion
        </button>
        <div class="profile-container">
            <img src="test.jpg" alt="Photo de profil" class="profile-picture" />
            <div class="dropdown-menu">
                <a href="#">Options</a>
                <a href="#">Mes Cours</a>
                <a href="#">Tableau de bord</a>
            </div>
        </div>
    </header>

    <main>
        <div class="dashboard-container">
            <h1>Tableau de bord</h1>
            <section class="previous-courses">
                <h2>Cours précédents</h2>
                <ul>
                    <li>Cours de Mathématiques - 10/03/2023</li>
                    <li>Cours de Physique - 12/03/2023</li>
                    <li>Cours de Chimie - 15/03/2023</li>
                </ul>
            </section>

            <section class="upcoming-courses">
                <h2>Prochains cours réservés</h2>
                <ul>
                    <li>Cours de Philosophie - 20/03/2023</li>
                    <li>Cours de Biologie - 22/03/2023</li>
                    <li>Cours de Français - 25/03/2023</li>
                </ul>
            </section>
        </div>
    </main>
</body>
</html>