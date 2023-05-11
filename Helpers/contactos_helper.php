<?php

// Função para descarregar os contactos - campo contacto apenas:
function retornarCampoContactos(){
    return selectSQLUnico("SELECT telefone, morada, mail, horario FROM contactos");   
}

// Função para editar os contactos na base de dados:
function editarCampoContactos($telefone, $morada, $mail, $horario){

    iduSQL("UPDATE contactos SET telefone='$telefone', morada='$morada', mail='$mail', horario='$horario' WHERE id='1'");
}

// Função para descarregar as redes - campo redes apenas:
function retornarCampoRedes(){
    return selectSQLUnico("SELECT instagram, facebook, linkedin FROM contactos");   
}

// Função para editar as redes na base de dados:
function editarCampoRedes($instagram, $facebook, $linkedin){

    iduSQL("UPDATE contactos SET instagram='$instagram', facebook='$facebook', linkedin='$linkedin' WHERE id='1'");
}
?>