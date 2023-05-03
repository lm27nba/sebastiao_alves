<?php

comSession();

$erro = (empty($rotas[1])) ? false : $rotas[1];

require 'Templates/Backoffice/header.php';
require 'Views/Backoffice/login_view.php';
// require 'Templates/footer.php';


$form = isset($_POST["login"]) && isset($_POST["pass"]);

if($form){

    $login = $_POST["login"];
    $pass = $_POST["pass"];

    $logado = logincodificado($login, $pass);

    if(!empty($logado)){
        header("Location: " . $urlback_base . "inicio");
        exit();
    }

    else{
        header("Location: " . $urlback_base . "login/true");
        exit();
    }
}


?>