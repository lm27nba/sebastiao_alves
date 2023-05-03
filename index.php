<?php

require_once 'Config/requests.php';

$rotas = $_SERVER["REQUEST_URI"];
$rotas = str_replace("/sebastiao_alves/", "", $rotas);
$rotas = explode("/", $rotas);

switch($rotas[0]){

    case "backoffice": require_once 'Controllers/Backoffice/backoffice_controller.php'; break;    
    default: require_once 'Controllers/Frontoffice/frontoffice_controller.php'; break;       
}

?>