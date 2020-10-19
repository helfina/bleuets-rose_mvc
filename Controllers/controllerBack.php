<?php

/**
 * Permet de sécuriser une chaine de caractères
 * @param $string
 * @return string
 */
function str_secur($string) {
    return trim(htmlspecialchars($string));
}

/**
 * Debug plus lisible des différentes variables
 * @param $var
 */
function debug($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

/**
     * permet de verifier si lutilisateur est connecter ou non
     *
     * @return boolean
     */
    function is_connected(): bool {
        
        return !empty($_SESSION['connected']);
    }
    