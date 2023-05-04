<?php

function ultimoAcesso($id){
    $data = selectSQLUnico("SELECT * FROM acessos WHERE id_utilizador='$id' ORDER BY id DESC LIMIT 2 OFFSET 1");
    return (empty($data)) ? "É a sua primeira vez no backoffice do site." : "O seu último acesso foi em: ". $data["entrada"]. ".";
}

?>