<?php

$rotas = $_SERVER["REQUEST_URI"];
$rotas = str_replace("/sebastiao_alves/backoffice", "", $rotas);
$rotas = explode("/", $rotas);

switch($rotas[0]){

    case "":
    case "login": require_once 'Models/Backoffice/login_model.php'; break;
    default: require_once 'Models/Both/404_model.php'; break;       
}

?>