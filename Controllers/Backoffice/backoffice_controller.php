<?php
/*
// 1º Utilizador - o Admin - (Apenas para permitir a primeira entrada - O refresh dá erro por ser login "único").
criarUser("Admin", "admin", "admin");
*/

// Derivação das rotas:
switch($rotas[1]){

    case "":
    case "login": require_once 'Models/Backoffice/login_model.php'; break;
    case "inicio": require_once 'Models/Backoffice/inicio_model.php'; break;
    case "carousel": require_once 'Models/Backoffice/carousel_model.php'; break;
    case "sair": require_once 'Models/Backoffice/sair_ model.php'; break;
    case "404":
    default: require_once 'Models/Both/404_model.php'; break;       
}

?>