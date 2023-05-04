<?php

comSession();

$erro = (empty($rotas[2])) ? false : $rotas[2];

require 'Templates/Backoffice/header.php';
require 'Views/Backoffice/login_view.php';

$form = isset($_POST["login"]) && isset($_POST["pass"]);

if($form){

    $login = $_POST["login"];
    $pass = $_POST["pass"];

    $logado = logincodificado($login, $pass);

    if(!empty($logado)){
        header("Location: " . $url_base . "backoffice/inicio");
        exit();
    }

    else{
        header("Location: " . $url_base . "backoffice/login/true");
        exit();
    }
}


?>