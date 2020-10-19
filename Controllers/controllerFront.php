<?php

class controllerFront
{
   static function home()
    {
        require './Views/home.php';
    }
   static function galerie()
    {
        require './Views/galerie.php';
    }
   static function contact()
    {
        require './Views/contact.php';
    }
   static function rgpd()
    {
        require './Views/rgpd.php';
    }
   static function Smap()
    {
        require './Views/sitemap.php';
    }
}