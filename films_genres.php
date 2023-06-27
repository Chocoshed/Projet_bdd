<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

// Récupère les données GET sur l'URL
if (isset($_GET['id'])) $id = $_GET['id'];
else $id = 0;


// Connexion à la base de données
include('include/connexion.php');
$pdo = connexion();

// Récupération des données : exemples
include('include/select.php');
$films = select_films_selected_genres($pdo, $id);
$all_genres = get_all_genres($pdo);


// Lancement du moteur Twig avec les données
echo $twig->render('films_genres.twig', [
    'films' => $films,
    'id' => $id,
    'all_genres' => $all_genres,
]);
