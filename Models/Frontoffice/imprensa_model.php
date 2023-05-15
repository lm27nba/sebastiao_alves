<?php

// Definir a página atual:
$pagina_atual = (empty($rotas[0]))? NULL : $rotas[0];

// Apanhar as páginas através do formulário:
$pag = (empty($rotas[1]))? 1 : intval($rotas[1]);
if($pag <= 0){ $pag = 1; }

// Variaveis da página:
$total_elementos = quantosElementosImprensa();
$elementos_por_pagina = 2;
$pag_necessarias = ceil($total_elementos/ $elementos_por_pagina);
$total_a_saltar = ($pag-1)*$elementos_por_pagina;
$imprensa = descarregarPorId($elementos_por_pagina, $total_a_saltar);

// Carregamento dos "fragmentos" que constroem a página:
require 'Templates/Frontoffice/header_nav.php';
require 'Views/Frontoffice/imprensa_view.php';
require 'Templates/Frontoffice/footer.php';

?>