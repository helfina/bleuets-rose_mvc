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
 
    if (isset($_GET['action'])){
       // debug($_GET['page']);
        //exit;
        if ($_GET['action'] == 'home'){
            
            controllerFront::home();
        }elseif($_GET['action'] == 'galerie'){
            controllerFront::galerie();
        }elseif($_GET['action'] == 'contact'){
            controllerFront::contact();
        }elseif($_GET['action'] == 'rgpd'){
            controllerFront::rgpd();
        }elseif($_GET['action'] == 'sitemap'){
            controllerFront::Smap();
        }else{
            controllerFront::home();
        }    
    }

}catch(Exception $e){
    
    require '/Views/error.php';
}
