<?php

// Saber quando foi o ultimo acesso ao programa por parte do utilizador:
function ultimoAcesso($id){
    $data = selectSQLUnico("SELECT * FROM acessos WHERE id_utilizador='$id' ORDER BY id DESC LIMIT 2 OFFSET 1");
    return (empty($data)) ? "É a sua primeira vez no backoffice do site." : "O seu último acesso foi em: (". $data["entrada"]. ").";
}

// Atualizar os dados relativos ao login:
function alterarSenha($id, $senha_guardada, $senha_antiga, $senha_nova, $confirmar_senha){

    $s_antiga = password_hash($senha_antiga, PASSWORD_DEFAULT);
    $s_nova = password_hash($senha_nova, PASSWORD_DEFAULT);
    $c_senha = password_hash($confirmar_senha, PASSWORD_DEFAULT);

    if(($senha_guardada == $s_antiga) && ($s_nova == $c_senha)){
        iduSQL("UPDATE utilizador SET senha='$s_nova'WHERE id='$id'");
        header("Location: " .$url_backoffice. "configuracoes/ok");
        exit();
    }

    else{
        header("Location: " .$url_backoffice. "configuracoes/erro");
        exit();
    }  
}

?>