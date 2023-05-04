<?php

// Entrar com senha criptografada:
function logincodificado($login, $senha){

    date_default_timezone_set("Europe/Lisbon");
    $usuario = selectSQLUnico("SELECT * FROM utilizador WHERE login='$login'");

    if(!empty($usuario)){
        if(password_verify($senha, $usuario["senha"])){
            session_start();
            $_SESSION["usuario"] = $usuario;

            $id = $usuario["id"];
            $agora = date("H:i:s - d/m/Y");
            iduSQL("INSERT INTO acessos (entrada, id_utilizador) VALUES ('$agora','$id')");
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

// Verificar se existe sessão aberta:
function semSession(){

    session_start();

    if(empty($_SESSION["usuario"])){
        header("Location: ". $url_base. "login");
        exit();
    }
}

// Caso haja sessão aberta, impedir de vir para o index.
function comSession(){

    session_start();

    if(!empty($_SESSION["usuario"])){
        header("Location: ". $url_base. "inicio");
        exit();
    }

}

function criarUser($nome, $login, $senha){

    $senha = password_hash($senha, PASSWORD_DEFAULT);
    iduSQL("INSERT INTO utilizador(nome, login, senha) VALUES ('$nome', '$login', '$senha')");
}

?>