<?php

// Inicio de sessão: 
semSession();
$user = $_SESSION["usuario"];

// Rotas possiveis na página:
$pagina_atual = (empty($rotas[1]))? NULL : $rotas[1];

// Apanhar as páginas através do formulário:
$pag = (empty($rotas[3]))? 1 : intval($rotas[3]);
if($pag <= 0){ $pag = 1; }

// Variaveis da página:
$total_elementos = quantosElementosCarousel();
$elementos_por_pagina = 2;
$pag_necessarias = ceil($total_elementos/ $elementos_por_pagina);
$total_a_saltar = ($pag-1)*$elementos_por_pagina;
$carousel = carouselPorPagina($elementos_por_pagina, $total_a_saltar);
$form = isset($_POST["escolha"]);

// Havendo escolha sobre o que ver:
if($form){
    $mostrar = $_POST["escolha"];
}

else{
    $mostrar = "desktop";
}

// Carregamento dos "fragmentos" que constroem a página:
require 'Templates/Backoffice/header_nav.php';
require 'Views/Backoffice/Carousel/carousel_view.php';
require 'Templates/Backoffice/footer.php';

?>