# PSaclaide

## Back End

### Commandes pour accéder page avec NodeJs

- Installer NodeJs
- Installer Vite : *npm install --save-dev vite laravel-vite-plugin*
- Lancer NodeJs  : *npm run dev* (JavaScript)

### Commandes pour lancer serveur 

- Générer clé    : *php artisan key:generate* (accéder au serveur)
- Lancer serveur : *php artisan serve*
- Chemin page web: *127.0.0.1:8000*

### Commandes pour créer modèles base de données

- Créer Modèle             : *php artisan make:model NomModele*
- Créer Modèle + Migration : *php artisan make:model NomModele -m* (migration permet de créer la table dans la base de données quand on les migrate)
=> important : création de la BD dans un ordre précis (date de migration créé l'ordre)

### Commandes pour créer la base de données

- Créer la BD et les tables : *php artisan migrate*
- Créer une table spécifique: *php artisan migrate --path=*

- Delete toute la BD : *php artisan migrate::reset* 
- Delete forcé       : *php artisan migrate::reset --force*

- Créer fausses données dans les tables : *php artisan db:seed* 

- Enlever les données des tables : *php artisan migrate:fresh*
- Enlever les données des tables + Ajout nouvelles données : *php artisan migrate:fresh --seed*

## Images

![login](https://user-images.githubusercontent.com/93045942/230586873-4d3e6484-f2f1-4dfc-9f1b-f9b6774af8c7.png)
![annonce](https://user-images.githubusercontent.com/93045942/230586895-c4a799fe-7537-4e6b-89ad-f047a0be39cc.png)
