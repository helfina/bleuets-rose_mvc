<?php

//AUTOLOAD.PHP GENERES AVEC COMPOSER
require_once __DIR__  . '/vendor/autoload.php';

if(file_exists(__DIR__ . '/.env')){
    $dotenv = \Dotenv\Dotenv::createimmutable(__DIR__);
    $dotenv->load();
}

require_once 'Models/config.php';
require_once 'Controllers/controllerBack.php';
require_once 'Controllers/controllerFront.php';

// DEFINITION DE LA PAGE COURANTE
try{
    $front = new controllerFront();
    // debug($front);
    // exit;
    if (isset($_GET['page'])){
        if ($_GET['page'] == 'home'){
            controllerFront::home();
        }elseif($_GET['page'] == 'galerie'){
            controllerFront::galerie();
        }elseif($_GET['page'] == 'contact'){
            controllerFront::contact();
        }elseif($_GET['page'] == 'rgpd'){
            controllerFront::rgpd();
        }elseif($_GET['page'] == 'sitemap'){
            controllerFront::Smap();
        }else{
            controllerFront::home();
        }    
    }

}catch(Exception $e){
    
    require '/Views/error.php';
}
