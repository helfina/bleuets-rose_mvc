<?php

class Controller{

    static function home(){
        require './Views/home.php';
    }
    public function galery(){
        require 'Views/galerie.php';
    }
    public function contact(){
        require 'Views/contact.php';
    }
    public function rgpd(){
        require 'Views/rgpd.php';
    }
    public function sitemap(){
        require 'Views/sitemap.php';
    }
    public function error404(){ 
        require 'Views/error.php';
    }

}

