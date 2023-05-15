<?php

// Inicio de sessão: 
semSession();
$user = $_SESSION["usuario"];

// Rotas possiveis na página:
$pagina_atual = (empty($rotas[1]))? NULL : $rotas[1];
$id = (empty($rotas[3]))? NULL : intval($rotas[3]);

// Variaveis da página:
$banner = retonarBannerEspecifico($id);
$form = isset($_POST["img_desk"]) && isset($_POST["img_mob"]) && isset($_POST["titulo"]) && isset($_POST["subtitulo"]) && isset($_POST["link"]) && isset($_POST["novidade"]);

// Havendo dados do Formulário:
if($form){

    $img_desk = $_POST["img_desk"];
    $img_mob = $_POST["img_mob"];
    $titulo = $_POST["titulo"];
    $subtitulo = $_POST["subtitulo"];
    $link = $_POST["link"];
    $novidade = ($_POST["novidade"] == "true") ? "1" : "0";

    editarCarousel($id, $img_desk, $img_mob, $titulo, $subtitulo, $link, $novidade);
    header("Location: " . $url_backoffice. "carousel");
    exit();
}

// Carregamento dos "fragmentos" que constroem a página:
require 'Templates/Backoffice/header_nav.php';
require 'Views/Backoffice/Carousel/editar_carousel_view.php';
require 'Templates/Backoffice/footer.php';

?>