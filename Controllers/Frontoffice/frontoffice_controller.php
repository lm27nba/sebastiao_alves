<?php

$rotas = $_SERVER["REQUEST_URI"];
$rotas = str_replace("/sebastiao_alves/", "", $rotas);
$rotas = explode("/", $rotas);

switch($rotas[0]){
;    
    default: require_once 'Models/Both/404_model.php'; break;       
}

?>