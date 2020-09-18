<?php
include_once 'Models/config.php';
require_once 'Models/db.php';

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
if (isset($_GET['page']) ) 
{
    // $page = trim(strtolower($_GET['page']));
    if($_GET['page'] == 'home'){ 
        
     
    }elseif($_GET['page'] == 'galerie'){ 
       return Controller::galery();


    }elseif($_GET['page'] == 'contact'){ 
        return Controller::contact();
       

    }elseif($_GET['page'] == 'rgpd'){ 
        return Controller::rgpd();
      

    }elseif($_GET['page'] == 'sitemap'){ 
        return Controller::sitemap();
   
    }else{
        echo 'error';
        return Controller::home();
    }
}else{
    return Controller::error404();       
    die(' Error : ' . $e->getMessage());
}