<?php

// Retornar a base de dados completa dos banners:
function retornarCarousel(){
    return selectSQL("SELECT * FROM carousel");   
}

// Adicionar novo elemento à base de dados:
function adicionarNovoElemento($titulo, $ativo, $tag, $posicao, $link, $texto, $desktop_img, $mobile_img){

    date_default_timezone_set("Europe/Lisbon");
    $agora = date("H:i:s - d/m/Y");

    iduSQL("INSERT INTO carousel (titulo, texto, ativo, tag, posicao, sabermais, desktop_img, mobile_img, edicao) VALUES ('$titulo', '$texto', '$ativo', '$tag', '$posicao', '$link', '$desktop_img', '$mobile_img', '$agora')");      
}

// Editar elementos na base de dados do carousel:
function editarElementoCarousel($id, $titulo, $ativo, $tag, $posicao, $link, $texto, $desktop_img, $mobile_img){

    date_default_timezone_set("Europe/Lisbon");
    $agora = date("H:i:s - d/m/Y");

    iduSQL("UPDATE carousel SET titulo='$titulo', texto='$texto', ativo='$ativo', tag='$tag', posicao='$posicao', sabermais='$link', desktop_img='$desktop_img', mobile_img='$mobile_img', edicao='$agora' WHERE id='$id'");      
}

// Apagar elemento na base de dados do carousel:
function apagarElementoCarousel($id){

    iduSQL("DELETE FROM carousel WHERE id='$id'");      
}

// Descarregar um elemento na base de dados do carousel:
function retornarBannerEspecifico($id){
    return selectSQLUnico("SELECT * FROM carousel WHERE id='$id'");
}

?>
