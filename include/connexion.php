<?php

function connexion()
{
  $pdo = new PDO('mysql:host=tp2.iha.unistra.fr;dbname=fromageat_film;charset=utf8', 'fromageat', 'cpkD!N2pL!P97p9');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

  if ($pdo) {
    return $pdo;
  } else {
    echo '<p>Erreur de connexion</p>';
    exit;
  }
}
