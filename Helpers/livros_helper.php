<?php

// Saber quantos elementos tenho na base de dados da livros:
function quantosElementosLivros(){
    return selectSQLUnico("SELECT Count(*) AS total FROM livros")["total"];
}

// Descarregar os livros por páginas:
function livrosPorPagina($elementos_por_pagina, $total_a_saltar){
    return selectSQL("SELECT * FROM livros ORDER BY id DESC LIMIT $elementos_por_pagina OFFSET $total_a_saltar");
}

// Adicionar um novo livro à base de dados: 
function adicionarLivro($imagem, $titulo, $texto){

    date_default_timezone_set("Europe/Lisbon");
    $agora = date("H:i:s - d/m/Y");

    iduSQL("INSERT INTO livros (imagem, titulo, texto, quando) VALUES ('$imagem', '$titulo', '$texto', '$agora')");
}

// Descarregar livro especifico:
function retonarLivroEspecifico($id){
    return selectSQLUnico("SELECT * FROM livros WHERE id='$id'");
}

// Editar um elemento na base de dados: 
function editarLivro($id, $imagem, $titulo, $texto){

    date_default_timezone_set("Europe/Lisbon");
    $agora = date("H:i:s - d/m/Y");

    iduSQL("UPDATE livros SET imagem='$imagem', titulo='$titulo', texto='$texto', quando='$agora' WHERE id='$id'");
}

// Apagar um livro:
function apagarLivro($id){
    iduSQL("DELETE FROM livros WHERE id='$id'");
}

?>