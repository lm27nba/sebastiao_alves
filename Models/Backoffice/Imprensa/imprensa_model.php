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
$total_elementos = quantosElementosImprensa();
$elementos_por_pagina = 3;
$pag_necessarias = ceil($total_elementos/ $elementos_por_pagina);
$total_a_saltar = ($pag-1)*$elementos_por_pagina;
$imprensa = descarregarPorId($elementos_por_pagina, $total_a_saltar);

// No caso de não haver imprensa (página digitada manualmente):
if(!$imprensa){
    header("Location: " .$url_backoffice. "404");
    exit();
}

// Carregamento dos "fragmentos" que constroem a página:
require 'Templates/Backoffice/header_nav.php';
require 'Views/Backoffice/Imprensa/imprensa_view.php';
require 'Templates/Backoffice/footer.php';

?>