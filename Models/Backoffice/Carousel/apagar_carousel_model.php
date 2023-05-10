<?php

// Inicio de sessão: 
semSession();
$user = $_SESSION["usuario"];

// Rotas possiveis na página:
$pagina_atual = (empty($rotas[1]))? NULL : $rotas[1];
$id = (empty($rotas[3]))? NULL : intval($rotas[3]);
$confirmacao = (empty($rotas[4]))? false : $rotas[4];

// Variaveis da página:
$banner = retonarBannerEspecifico($id);

// Havendo tentativa de "burlar" a confirmação com dados errados, reenviar user para o 404:
if($confirmacao == "true"){

    apagarBanner($id);
    header("Location: " . $url_backoffice. "carousel");
    exit(); 
}

// Carregamento dos "fragmentos" que constroem a página:
require 'Templates/Backoffice/header_nav.php';
require 'Views/Backoffice/Carousel/apagar_carousel_view.php';
require 'Templates/Backoffice/footer.php';


?>