<?php

// Inicio de sessão: 
semSession();
$user = $_SESSION["usuario"];

// Rotas possiveis na página:
$pagina_atual = (empty($rotas[1]))? NULL : $rotas[1];

// Variaveis:
$contactos = retornarCampoContactos();
$form = isset($_POST["telefone"]) && isset($_POST["morada"]) && isset($_POST["mail"]) && isset($_POST["horario"]);

// Havendo dados introduzidos no formulário:
if($form){

    $telefone = $_POST["telefone"];
    $morada = $_POST["morada"];
    $mail = $_POST["mail"];
    $horario = $_POST["horario"];

    editarCampoContactos($telefone, $morada, $mail, $horario);
    header("Location: ". $url_backoffice . "contactos");
    exit();
}

// Carregamento dos "fragmentos" que constroem a página:
require_once 'Templates/Backoffice/header.php';
require_once 'Views/Backoffice/Contactos/editar_contactos_view.php';

?>