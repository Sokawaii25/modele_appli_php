# Modèle d'application PHP

Modèle simple d'application web en PHP suivant le modèle MVC

## Structure
    - **models** : contient les classes des objets de l'application
    - **DAO** : contient les interactions avec la/les bases de données
        - **DBQueries** : définition des requêtes
    - **config** : contient les informations critiques (infos de connexion aux bases de données etc)
    - **controller.php** : contient la logique de l'application (élaboration des listes de données à afficher)
    - **index.php** : gère l'affichage de la page

## Fonctionnement
1. Au chargement de la page, la vue (index.php) est chargée.
2. Celle-ci appelle dès le début le controller
3. Le controller va récupérer les données des bases de données
4. Puis il traite ces données brutes pour remplir le modèle (généralement une liste de [classe])
6. Et retourne une liste de lignes correspondant aux informations du tableau à générer.
7. La vue récupère ce tableau d'informations et génère le tableau HTML correspondant.
8. Le tableau est généralement repris par DataTables.js pour ajouter des fonctionnalités de tri et de filtre
9. Il est possible que du JavaScript soit ajouté à la vue pour gérer les actions de l'utilisateur.
