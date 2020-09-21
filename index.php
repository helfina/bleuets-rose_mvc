<?php

//AUTOLOAD.PHP GENERE AVEC COMPOSER
require_once __DIR__  . '/vendor/autoload.php';

if(file_exists(__DIR__ . '/.env')){
    $dotenv = \Dotenv\Dotenv::createimmutable(__DIR__);
    $dotenv->load();
}

require_once 'Models/config.php';

require_once 'Controllers/controller.php';


// AUTOLOADER POUR CHARGER LES CLASSES
require_once 'Controllers/Autoloader.php';
Autoloader::register();


// DEFINITION DE LA PAGE COURANTE
if (isset($_GET['page']) AND !empty($_GET['page'])) {
    $page = trim(strtolower($_GET['page']));    
}
else{
    $page = 'home';
}

// Tableau contenant toutes les pages
$allPages = scandir('Views/');

// Vérification de l'existence de la page
if (in_array($page.'.php', $allPages)) {

     // Inclusion de la page
    include_once 'Views/'.$page.'.php';

} else {
    $page = 'error';
    // Inclusion de la page erreur
    include_once 'views/error.php';

}