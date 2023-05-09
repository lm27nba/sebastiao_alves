<?php

// Descarregar os dados do autor:
function descarregarPaginaAutor(){
    return selectSQLUnico("SELECT img_autor, texto_autor FROM autor WHERE id='1'");
}

// Descarregar os dados da página home:
function descarregarPaginaHome(){
    return selectSQLUnico("SELECT img_home, texto_home FROM autor WHERE id='1'");
}

// Atualizar dados da página autor:
function editarAutor($img_autor, $texto_autor){
    iduSQL("UPDATE autor SET img_autor='$img_autor', texto_autor='$texto_autor' WHERE id='1'");
}

// Atualizar dados da página home:
function editarHome($img_home, $texto_home){
    iduSQL("UPDATE autor SET img_home='$img_home', texto_home='$texto_home' WHERE id='1'");
}
?>