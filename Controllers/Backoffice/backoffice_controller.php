<?php

// criarUser("Admin", "admin", "admin");

$rotas = $_SERVER["REQUEST_URI"];
$rotas = str_replace("/sebastiao_alves/", "", $rotas);
$rotas = explode("/", $rotas);

switch($rotas[1]){

    case "":
    case "login": require_once 'Models/Backoffice/login_model.php'; break;
    case "inicio": require_once 'Models/Backoffice/inicio_model.php'; break;
    case "carousel": require_once 'Models/Backoffice/carousel_model.php'; break;
    case "sair": require_once 'Models/Backoffice/sair_ model.php'; break;
    default: require_once 'Models/Both/404_model.php'; break;       
}

?>