<?php

// Saber quando foi o ultimo acesso ao programa por parte do utilizador:
function ultimoAcesso($id){
    $data = selectSQLUnico("SELECT * FROM acessos WHERE id_utilizador='$id' ORDER BY id DESC LIMIT 2 OFFSET 1");
    return (empty($data)) ? "É a sua primeira vez no backoffice do site." : "O seu último acesso foi em: (". $data["entrada"]. ").";
}

// Atualizar os dados relativos ao login:
function alterarSenha($id, $senha_nova){

    $senha = password_hash($senha_nova, PASSWORD_DEFAULT);
    iduSQL("UPDATE utilizador SET senha='$senha'WHERE id='$id'");
}

//Validar Senhas introduzidas:
function validarNovosDados($senha_antiga, $senha_guardada, $senha_nova, $confirmar_senha){

    if(password_verify($senha_antiga, $senha_guardada) && ($senha_nova == $confirmar_senha)){
        return true;
    }
    else{ return false;}
}

?>