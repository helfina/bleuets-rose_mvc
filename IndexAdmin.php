<?php

//AUTOLOAD.PHP GENERE AVEC COMPOSER
require_once __DIR__  . '/vendor/autoload.php';

if(file_exists(__DIR__ . '/.env')){
    $dotenv = \Dotenv\Dotenv::createimmutable(__DIR__);
    $dotenv->load();
}



require_once 'Controllers/controller.php';


// AUTOLOADER POUR CHARGER LES CLASSES
require_once 'Controllers/Autoloader.php';
Autoloader::register();


// DEFINITION DE LA PAGE COURANTE
// Définition de la page courante

if (isset($_GET['admin']) AND !empty($_GET['admin'])) {   
   
    $admin = trim(strtolower($_GET['admin']));

}elseif(!is_connected()) {          
  
    $admin = 'adminLog' ;  
  
        
}elseif(is_connected()){
   
    $admin = 'admin';
  
}




// Tableau contenant toutes les pages
$allAdmins = scandir('Views/admin/');

// Vérification de l'existence de la page
if (in_array($admin.'.php', $allAdmins)) {

    // Connexion à la base de données
    require_once 'Models/config.php';

    // Inclusion de la page
    include_once 'Views/admin/'.$admin.'.php';

} else {
    // Inclusion de la page erreur
    include_once 'Views/error_view.php';

}
