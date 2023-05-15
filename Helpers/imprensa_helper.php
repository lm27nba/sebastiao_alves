<?php

// Adicionar um novo elemento à base de dados: 
function adicionarPublicacao($imagem, $titulo, $texto, $quando){
    
    iduSQL("INSERT INTO imprensa (imagem, titulo, texto, quando) VALUES ('$imagem', '$titulo', '$texto', '$quando')");
}

// Saber quantos elementos tenho na base de dados da imprensa:
function quantosElementosImprensa(){
    return selectSQLUnico("SELECT Count(*) AS total FROM imprensa")["total"];
}

// Descarregar publicação especifica:
function retonarPubicacaoEspecifica($id){
    return selectSQLUnico("SELECT * FROM imprensa WHERE id='$id'");
}

// Apagar uma publicação:
function apagarPublicacao($id){
    iduSQL("DELETE FROM imprensa WHERE id='$id'");
}

// Descarregar todos os elementos da imprensa:
function retornarTodaImprensa(){
    return selectSQL("SELECT * FROM imprensa");
}

// Editar um elemento na base de dados: 
function editarPublicacao($id, $imagem, $titulo, $texto, $quando){

    iduSQL("UPDATE imprensa SET imagem='$imagem', titulo='$titulo', texto='$texto', quando='$quando' WHERE id='$id'");
}

// Apresentar a data nos moldes pretendidos: 

function devolverData($quando){

    setlocale(LC_TIME, 'pt_pt', 'pt_pt.utf-8', 'portuguese');
    $data_formatada = strftime('%d %B %Y', strtotime($quando));
    return "Publicado a " .$data_formatada;
}

// Descarregar a imprensa por Id:
function descarregarPorId($elementos_por_pagina, $total_a_saltar){
    return selectSQL("SELECT * FROM imprensa ORDER BY id DESC LIMIT $elementos_por_pagina OFFSET $total_a_saltar");
}

?>