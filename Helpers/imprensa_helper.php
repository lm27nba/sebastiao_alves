<?php

// Descarregar os elementos da tabela da imprensa:
function retornarImprensaCompleta(){
    return selectSQL("SELECT * FROM imprensa ORDER BY id DESC");
}

// Adicionar um noovo elemento à base de dados: 
function adicionarPublicacao($imagem, $titulo, $texto, $quando){
    iduSQL("INSERT INTO imprensa (imagem, titulo, texto, quando) VALUES ('$imagem', '$titulo', '$texto', '$quando')");
}

// Saber quantos elementos tenho na base de dados da imprensa:
function quantosElementosImprensa(){
    return selectSQLUnico("SELECT Count(*) AS total FROM imprensa")["total"];
}

// Descarregar a imprensa por páginas:
function imprensaPorPagina($elementos_por_pagina, $total_a_saltar){
    return selectSQL("SELECT * FROM imprensa ORDER BY id DESC LIMIT $elementos_por_pagina OFFSET $total_a_saltar");
}

?>