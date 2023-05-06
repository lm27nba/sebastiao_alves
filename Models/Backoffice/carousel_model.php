<?php

// Inicio de sessão: 
semSession();
$user = $_SESSION["usuario"];

// Rotas possiveis na página:
$pagina_atual = (empty($rotas[1]))? NULL : $rotas[1];
$ecra = (empty($rotas[2]))? NULL : $rotas[2];
$accao = (empty($rotas[3]))? NULL : $rotas[3];
$mensagem = (empty($rotas[4]))? NULL : $rotas[4];

// Carregamento dos "fragmentos" que constroem a página:
require_once 'Templates/Backoffice/header_nav.php';
require_once 'Views/Backoffice/carousel_view.php';

if($ecra){

    // Caso seja para ecrãs de desktop:
    if($ecra == "desktop"){

        // Variaveis após obtenção da subrota:
        $banner = retornarCarousel();
        $quantidade = count($banner);
        $quantidade = intval($quantidade);

        if($accao){

            // Havendo a acção, comecemos por adicionar:
            if($accao == "adicionar"){

                // Recolhar os dados do formulário para poder adicinar depois à base de dados:
                $form = 
                isset($_POST["titulo"]) && isset($_POST["ativo"]) && isset($_POST["tag"]) && isset($_POST["posicao"]) && 
                isset($_POST["link"]) && isset($_POST["texto"]) && isset($_POST["desktop_img"]) && isset($_POST["mobile_img"]);
      
                if($form){

                    // Havendo formulário vamos enviar os dados recolhidos para a base de dados! 
                    $titulo = $_POST["titulo"];
                    $ativo = $_POST["ativo"];
                    $tag = $_POST["tag"];
                    $posicao = $_POST["posicao"];
                    $link = $_POST["link"];
                    $texto = $_POST["texto"];
                    $desktop_img = $_POST["desktop_img"];
                    $mobile_img = $_POST["mobile_img"];

                    // Adicionar o novo carousel à base de dados e enviar para a mensagem! 
                    adicionarNovoElemento($titulo, $ativo, $tag, $posicao, $link, $texto, $desktop_img, $mobile_img);
                    header("Location: ".$url_backoffice. "/" .$pagina_atual."/".$ecra."/".$accao."/sucesso");
                    exit();
                }
            }

            // Havendo a acção, a opção editar:
            elseif($accao == "editar" && !empty($banner)){

                $banner_especifico = retornarBannerEspecifico($id);

                // Recolhar os dados editados do formulário para poder editar na base de dados:
                $form = 
                isset($_POST["titulo"]) && isset($_POST["ativo"]) && isset($_POST["tag"]) && isset($_POST["posicao"]) && 
                isset($_POST["link"]) && isset($_POST["texto"]) && isset($_POST["desktop_img"]) && isset($_POST["mobile_img"]);

                if($form){

                    // Havendo formulário vamos enviar os dados recolhidos para a base de dados!
                    $id = $banner_especifico["id"];
                    $titulo = $_POST["titulo"];
                    $ativo = $_POST["ativo"];
                    $tag = $_POST["tag"];
                    $posicao = $_POST["posicao"];
                    $link = $_POST["link"];
                    $texto = $_POST["texto"];
                    $desktop_img = $_POST["desktop_img"];
                    $mobile_img = $_POST["mobile_img"];

                    editarElementoCarousel($id, $titulo, $ativo, $tag, $posicao, $link, $texto, $desktop_img, $mobile_img);
                    header("Location: ".$url_backoffice. "/" .$pagina_atual."/".$ecra."/".$accao."/sucesso");
                    exit();
                }
            }

            // Havendo a acção, a opção apagar:
            elseif($accao == "apagar" && !empty($banner)){

                // Preparação dos dados a apresentar na confirmação:
                $id = $mensagem;
                $banner_especifico = retornarBannerEspecifico($id);
                $imagem = $banner_especifico["desktop_img"];
                $titulo = $banner_especifico["titulo"];

                if($mensagem == "confirma"){
                    apagarElementoCarousel($id);
                    header("Location: ".$url_backoffice. "/" .$pagina_atual."/".$ecra."/".$accao."/sucesso");
                    exit();
                }
            }

            else{
                header("Location: ".$url_backoffice. "/404");
                exit();
            }
        }
    }
}
?>