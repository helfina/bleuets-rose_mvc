<?php

class Controller{

    static function home(){
        require './Views/home.php';
    }
    static function galery(){
        require './Views/galerie.php';
    }
    static function contact(){
        require './Views/contact.php';
    }
    static function rgpd(){
        require './Views/rgpd.php';
    }
    static function sitemap(){
        require './Views/sitemap.php';
    }
    static function error404(){ 
        require './Views/error.php';
    }
    static function admin(){ 
        require './Views/admin/admin.php';
    }

}

