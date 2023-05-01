<?php

$rotas = $_SERVER["REQUEST_URI"];
$rotas = str_replace("/sebastiao_alves/frontoffice/", "", $rotas);
$rotas = explode("/", $rotas);

switch($rotas[0]){

    case "":
    case "login": require_once 'Models/login_model.php'; break;  
    // default: require_once ''; break;       
}

?>