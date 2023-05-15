<?php

// Inicio de sessão: 
semSession();
$user = $_SESSION["usuario"];

// Rotas possiveis na página:
$pagina_atual = (empty($rotas[1]))? NULL : $rotas[1];
$id = (empty($rotas[3]))? NULL : $rotas[3];

// Medida apenas para chutar fora se tentar entrar escrevendo rota à mão e esta não exista.
if(!$id || ($id < 1 || $id > 3)){
    header("Location: " .$url_backoffice. "404");
    exit();
}

// Variaveis da página:
$destaque_especifico = destaqueEspecifico($id);
$lista_livros = retornarListaLivros();
$form = isset($_POST["livro"]) && isset($_POST["destaque"]) && isset($_POST["estado"]);

// Havendo dados do Formulário:
if($form){

    $id_livro = $_POST["livro"];
    $destaque = $_POST["destaque"];
    $estado = $_POST["estado"];

    editarDestaques($id, $destaque, $estado, $id_livro);
    header("Location: " . $url_backoffice. "destaques");
    exit();
}

// Carregamento dos "fragmentos" que constroem a página:
require 'Templates/Backoffice/header_nav.php';
require 'Views/Backoffice/Destaques/editar_destaques_view.php';
require 'Templates/Backoffice/footer.php';

?>