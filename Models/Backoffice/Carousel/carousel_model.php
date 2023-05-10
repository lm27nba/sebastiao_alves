<?php

// Inicio de sessão: 
semSession();
$user = $_SESSION["usuario"];

// Rotas possiveis na página:
$pagina_atual = (empty($rotas[1]))? NULL : $rotas[1];
$mostrar = (empty($rotas[3]))? "desktop" : $rotas[3];

// Variaveis da página relacionadas com o tipo de ecrã do dispositivo:
$form = isset($_POST["escolha"]);

// Havendo escolha sobre qual dispositivo ver - muda as opções e redireciona apenas para atualizar o link:
if($form){ 
    $mostrar = $_POST["escolha"]; 
    header("Location: ".$url_backoffice."carousel/ver/".$mostrar."/1");
    exit();
}

// Apanhar as páginas através do formulário:
$pag = (empty($rotas[4]))? 1 : intval($rotas[4]);
if($pag <= 0){ $pag = 1; }

// Variaveis da página relacionadas com a paginação:
$total_elementos = quantosElementosCarousel();
$elementos_por_pagina = ($mostrar == "desktop") ? 4: 1; //img em mobile são mais altas, daí apenas 1 por página.
$pag_necessarias = ceil($total_elementos/ $elementos_por_pagina);
$total_a_saltar = ($pag-1)*$elementos_por_pagina;
$carousel = carouselPorPagina($elementos_por_pagina, $total_a_saltar);

// Apenas por segurança, caso se troque de ecrã, como não apresentam as mesmas quantidades por página, voltar sempre à página 1.
if(!$carousel){
    header("Location: ".$url_backoffice."carousel/ver/".$mostrar."/1");
    exit();
}
// Carregamento dos "fragmentos" que constroem a página:
require 'Templates/Backoffice/header_nav.php';
require 'Views/Backoffice/Carousel/carousel_view.php';
require 'Templates/Backoffice/footer.php';

?>