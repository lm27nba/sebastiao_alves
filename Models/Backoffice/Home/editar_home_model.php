<?php

// Inicio de sessão: 
semSession();
$user = $_SESSION["usuario"];

// Rotas possiveis na página:
$pagina_atual = (empty($rotas[1]))? NULL : $rotas[1];

// Variaveis da página:
$home = descarregarPaginaHome();
$form = isset($_POST["img_home"]) && isset($_POST["texto_home"]);

// Havendo dados do Formulário:
if($form){

    $img_home = $_POST["img_home"];
    $texto_home = $_POST["texto_home"];

    editarHome($img_home, $texto_home);
    header("Location: " . $url_backoffice. "home");
    exit();
}

// Carregamento dos "fragmentos" que constroem a página:
require 'Templates/Backoffice/header_nav.php';
require 'Views/Backoffice/Home/editar_home_view.php';
require 'Templates/Backoffice/footer.php';

?>