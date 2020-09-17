<?php
include_once 'Models/config.php';
require_once 'Models/db.php';

//AUTOLOAD.PHP GENERE AVEC COMPOSER
require_once __DIR__  . '/vendor/autoload.php';

if(file_exists(__DIR__ . '/.env')){
    $dotenv = \Dotenv\Dotenv::createimmutable(__DIR__);
    $dotenv->load();
}

// Autoloader
require_once '/Controllers/Autoloader.php';
Autoloader::register();

// Définition de la page courante
if (isset($_GET['page']) AND !empty($_GET['page'])) {
    $page = trim(strtolower($_GET['page']));
    if($_GET['page'] == 'home'){
        Controller::ome();

    }
    
}