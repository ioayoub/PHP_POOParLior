<?php
require_once('libraries/database.php');
require_once('libraries/utils.php');
require_once('libraries/models/Article.php');
require_once('libraries/models/User.php');

$articleModel = new Article();
$UserModel = new User();
/*
 * Récupération des articles
 */
// On utilisera ici la méthode query (pas besoin de préparation car aucune variable n'entre en jeu)
$articles = $articleModel->findAllById("created_at DESC");


/*
 *Affiche le resultat de  $pageTitle et $pageContent de façon dynamique
 * 
 * */

$pageTitle = "Accueil";
render('articles/index', compact('pageTitle', 'articles'));

$users = $UserModel->findAllById();
var_dump($users);
die();
