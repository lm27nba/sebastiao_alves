<?php

// Adicionar um novo elemento à base de dados: 
function adicionarPublicacao($imagem, $titulo, $texto, $quando, $posicao){
    
    iduSQL("INSERT INTO imprensa (imagem, titulo, texto, quando, posicao) VALUES ('$imagem', '$titulo', '$texto', '$quando'. '$posicao')");
}

// Saber quantos elementos tenho na base de dados da imprensa:
function quantosElementosImprensa(){
    return selectSQLUnico("SELECT Count(*) AS total FROM imprensa")["total"];
}

// Descarregar a imprensa por páginas:
function imprensaPorPagina($elementos_por_pagina, $total_a_saltar){
    return selectSQL("SELECT * FROM imprensa ORDER BY id DESC LIMIT $elementos_por_pagina OFFSET $total_a_saltar");
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

// Atualizar as posições dos elementos guardados para apresentação futura: 
function atualizarPosicoes($id, $posicao,$posicao_antiga){
    
    $posicao_nova = intval($posicao);
    $posicao_antiga = intval($posicao_antiga);

    iduSQL("UPDATE imprensa SET posicao='$posicao_nova' WHERE id='$id'");

    if($posicao_nova < $posicao_antiga){

        iduSQL("UPDATE imprensa SET posicao = posicao + 1 WHERE posicao >= '$posicao_nova' AND id != '$id' AND posicao <= '$posicao_antiga'");
    }

    else{
        iduSQL("UPDATE imprensa SET posicao = posicao - 1 WHERE posicao > $posicao_antiga AND posicao <= $posicao_nova AND id != $id");
    }
}

// Descarregar a imprensa por ordem das posições:
function descarregarPorPosicao($elementos_por_pagina, $total_a_saltar){
    return selectSQL("SELECT * FROM imprensa ORDER BY posicao ASC LIMIT $elementos_por_pagina OFFSET $total_a_saltar");
}

?>