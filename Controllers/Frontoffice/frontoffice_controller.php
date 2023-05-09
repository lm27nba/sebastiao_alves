<?php

// Criação do sistema de rotas para o frontoffice:
$rotas = $_SERVER["REQUEST_URI"];
$rotas = str_replace("/sebastiao_alves/", "", $rotas);
$rotas = explode("/", $rotas);

// Derivação das rotas:
switch($rotas[0]){
    
    case "":
    case "home": require_once 'Models/Frontoffice/home_model.php'; break; 
    case "autor": require_once 'Models/Frontoffice/autor_model.php'; break;
    case "livros": require_once 'Models/Frontoffice/livros_model.php'; break;
    case "contactos": require_once 'Models/Frontoffice/contactos_model.php'; break;
    case "imprensa": require_once 'Models/Frontoffice/imprensa_model.php'; break;
    default: require_once 'Models/Frontoffice/404_model.php'; break;       
}

?>