<?php
require_once 'Models/config.php';
require_once 'Models/db.php';
require_once 'Controllers/controllerBack.php';
//AUTOLOAD.PHP GENERE AVEC COMPOSER
require_once __DIR__  . '/vendor/autoload.php';

if(file_exists(__DIR__ . '/.env')){
    $dotenv = \Dotenv\Dotenv::createimmutable(__DIR__);
    $dotenv->load();
}

// AUTOLOADER POUR CHARGER LES CLASSES
require_once 'Controllers/Autoloader.php';
Autoloader::register();


// DEFINITION DE LA PAGE COURANTE
if (isset($_GET['page']) AND !empty($_GET['page'])) {
    $page = trim(strtolower($_GET['page']));
    
    var_dump($page);
    exit;
}else{

    $page = 'home';
    return Controller::home();
    
    
}


// if($_GET['page'] == ($_GET ['galerie'])){ 
//     $page = 'galerie';
//             return Controller::galery();        
//             }
//             elseif($_GET['page'] == ($_GET ['contact'])){ 
//                 return Controller::contact();       
    
//             }
//             elseif($_GET['page'] == ($_GET ['rgpd'])){ 
//                 return Controller::rgpd();
          
//             }
//             elseif($_GET['page'] == ($_GET ['sitemap'])){ 
//                 return Controller::sitemap();   
//             }
//             elseif($_GET['page'] == ($_GET ['admin'])){
//                 return Controller::admin();
//             }
