<?php

// Saber quantos banners existem para a paginação:
function quantosElementosCarousel(){
    return selectSQLUnico("SELECT Count(*) AS total FROM carousel")["total"];
}

// Descarregar os banners relativos a cada página:
function carouselPorPagina($elementos_por_pagina, $total_a_saltar){
    return selectSQL("SELECT * FROM carousel ORDER BY id DESC LIMIT $elementos_por_pagina OFFSET $total_a_saltar");
}

?>
