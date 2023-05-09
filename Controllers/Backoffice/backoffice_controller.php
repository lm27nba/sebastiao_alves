<?php

// 1º Utilizador - o Admin - (Apenas para permitir a primeira entrada - O refresh dá erro por ser login como "único").
// criarUser("Admin", "admin", "admin");


// Derivação das rotas:
switch($rotas[1]){

    case "":
    case "login": require_once 'Models/Backoffice/Login/login_model.php'; break;
    case "inicio": require_once 'Models/Backoffice/Inicio/inicio_model.php'; break;

    case "carousel":
        switch((isset($rotas[2])) ? $rotas[2] : ""){

            case "":
            case "ver": require_once 'Models/Backoffice/Carousel/carousel_model.php'; break;
            case "adicionar": require_once 'Models/Backoffice/Carousel/adicionar_carousel_model.php'; break;
            case "editar": require_once 'Models/Backoffice/Carousel/editar_carousel_model.php'; break;
            case "apagar": require_once 'Models/Backoffice/Carousel/apagar_carousel_model.php'; break;
            default: require_once 'Models/Backoffice/Erro/404_model.php'; break;
        }
    break;
    
    case "home":
        switch((isset($rotas[2])) ? $rotas[2] : ""){

            case "":
            case "home": require_once 'Models/Backoffice/Home/home_model.php'; break;
            case "editar": require_once 'Models/Backoffice/Home/editar_home_model.php'; break;
            default: require_once 'Models/Backoffice/Erro/404_model.php'; break;
        }
    break;

    case "autor":
        switch((isset($rotas[2])) ? $rotas[2] : ""){

            case "":
            case "autor": require_once 'Models/Backoffice/Autor/autor_model.php'; break;
            case "editar": require_once 'Models/Backoffice/Autor/editar_autor_model.php'; break;
            default: require_once 'Models/Backoffice/Erro/404_model.php'; break;
        }
    break;

    case "livros":
        switch((isset($rotas[2])) ? $rotas[2] : ""){

            case "":
            case "ver": require_once 'Models/Backoffice/Livros/livros_model.php'; break;
            case "adicionar": require_once 'Models/Backoffice/Livros/adicionar_livros_model.php'; break;
            case "editar": require_once 'Models/Backoffice/Livros/editar_livros_model.php'; break;
            case "apagar": require_once 'Models/Backoffice/Livros/apagar_livros_model.php'; break;
            default: require_once 'Models/Backoffice/Erro/404_model.php'; break;
        }
    break;

    case "destaques":
        switch((isset($rotas[2])) ? $rotas[2] : ""){

            case "":
            case "ver": require_once 'Models/Backoffice/Destaques/destaques_model.php'; break;
            case "editar": require_once 'Models/Backoffice/Destaques/editar_destaques_model.php'; break;
            default: require_once 'Models/Backoffice/Erro/404_model.php'; break;
        }
    break;

    case "imprensa":
        switch((isset($rotas[2])) ? $rotas[2] : ""){

            case "":
            case "ver": require_once 'Models/Backoffice/Imprensa/imprensa_model.php'; break;
            case "adicionar": require_once 'Models/Backoffice/Imprensa/adicionar_imprensa_model.php'; break;
            case "editar": require_once 'Models/Backoffice/Imprensa/editar_imprensa_model.php'; break;
            case "apagar": require_once 'Models/Backoffice/Imprensa/apagar_imprensa_model.php'; break;
            default: require_once 'Models/Backoffice/Erro/404_model.php'; break;
        }
    break;

    case "contactos":
        switch((isset($rotas[2])) ? $rotas[2] : ""){

            case "": require_once 'Models/Backoffice/Contactos/contactos_model.php'; break;
            case "editar": require_once 'Models/Backoffice/Contactos/editar_contactos_model.php'; break;
            default: require_once 'Models/Backoffice/Erro/404_model.php'; break;
        }
    break;

    case "redes":
        switch((isset($rotas[2])) ? $rotas[2] : ""){

            case "": require_once 'Models/Backoffice/Redes/redes_model.php'; break;
            case "editar": require_once 'Models/Backoffice/Redes/editar_redes_model.php'; break;
            default: require_once 'Models/Backoffice/Erro/404_model.php'; break;
        }
    break;

    case "configuracoes": 
        switch((isset($rotas[2])) ? $rotas[2] : ""){

            case "": require_once 'Models/Backoffice/Configuracoes/configuracoes_model.php'; break;
            case "ok": require_once 'Models/Backoffice/Configuracoes/configuracoes_ok_model.php'; break;
            case "erro": require_once 'Models/Backoffice/Configuracoes/configuracoes_erro_model.php'; break;
            default: require_once 'Models/Backoffice/Erro/404_model.php'; break;
        }
    break;  
        
    case "sair": require_once 'Models/Backoffice/Sair/sair_model.php'; break;
    case "404":
    default: require_once 'Models/Backoffice/Erro/404_model.php'; break;       
}

?>
