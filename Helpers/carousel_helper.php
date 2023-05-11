<?php

// Saber quantos banners existem para a paginação:
function quantosElementosCarousel(){
    return selectSQLUnico("SELECT Count(*) AS total FROM carousel")["total"];
}

// Descarregar os banners relativos a cada página:
function carouselPorPagina($elementos_por_pagina, $total_a_saltar){
    return selectSQL("SELECT * FROM carousel LIMIT $elementos_por_pagina OFFSET $total_a_saltar");
}

// Guardar um novo banner na base de dados:
function adicionarCarousel($img_desk, $img_mob, $titulo, $subtitulo, $link, $novidade){

    date_default_timezone_set("Europe/Lisbon");
    $agora = date("H:i:s - d/m/Y");

    iduSQL("INSERT INTO carousel (img_desk, img_mob, titulo, subtitulo, quando, link, novidade) VALUES ('$img_desk', '$img_mob','$titulo', '$subtitulo', '$agora', '$link', '$novidade')");
}

// Descarregar um banner especifico:
function retonarBannerEspecifico($id){
    return selectSQLUnico("SELECT * FROM carousel WHERE id='$id'");
}

// Descarregar os banners:
function retonarBanners(){
    return selectSQL("SELECT * FROM carousel");
}

// Guardar as alterações a um banner na base de dados:
function editarCarousel($id, $img_desk, $img_mob, $titulo, $subtitulo, $link, $novidade){

    date_default_timezone_set("Europe/Lisbon");
    $agora = date("H:i:s - d/m/Y");

    iduSQL("UPDATE carousel SET img_desk='$img_desk', img_mob='$img_mob', titulo='$titulo', subtitulo='$subtitulo', quando='$agora', link='$link', novidade='$novidade' WHERE id='$id'");
}

// Apagar um banner da base de dados:
function apagarBanner($id){
    iduSQL("DELETE FROM carousel WHERE id='$id'");
}

?>
