<?php

// Entrar com senha criptografada:
function abrirSessaoCifrada($login, $senha){

    date_default_timezone_set("Europe/Lisbon");
    $user = selectSQLUnico("SELECT * FROM usuarios WHERE user='$login'");

    if(!empty($user)){
        if(password_verify($senha, $user["senha"])){
            session_start();
            $_SESSION["usuario"] = $user;

            $id = $user["id"];
            $data_atual = date("H:i:s - d/m/Y");
            iduSQL("INSERT INTO acessos (acesso, id_usuarios) VALUES ('$data_atual','$id')");
            return true;
        }
        else{
            return false;
        }
    }
    else{
        return false;
    }
}

// Verificar se existe ou não sessão aberta:
function impedirEntrarSemSessao(){

    session_start();

    if(empty($_SESSION["usuario"])){
        header("Location: ../backoffice.php");
        exit();
    }
}

// Caso haja sessão aberta, impedir de vir para o "inicio".
function existeSessaoAberta(){

    session_start();

    if(!empty($_SESSION["usuario"])){
        header("Location: backoffice/inicio.php");
        exit();
    }

}