<?php

require_once 'funcoes.php';

existeSessaoAberta()
$erro = (isset($_GET["erro"])) ? $_GET["erro"] : false;


?>

<!DOCTYPE html>
<html lang="pt">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title></title>

        <!-- === Tab Icon === -->
        <link rel="icon" href="file.jpg" type="image">

        <!-- === CSS Bootstrap === -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

        <!-- === CSS Local === -->
        <link rel="stylesheet" href="css/backoffice.css">
    </head>

    <body>
        <header class="container p-0">
            <div class="row">
                <div class="col-12 text-center titulo">
                    Bem-vindo ao backoffice - sebastião alves
                </div>
            </div>
        </header>

        <main class="container p-0">
            <div class="row">
                <div class="col-8 caixa mx-auto">

                    <div class="col-12 subtitulo">
                        Login
                    </div>

                    <?php if($erro): ?>

                        <div class="col-12 mensagem_erro">
                            Login Inválido
                        </div>

                    <?php endif; ?>
                    
                    <div class="col-5 mx-auto">
                        <form action="backoffice/sistema/login.php" class="formulario">

                            <input class="input" type="text" name="usuario" placeholder="Usuário" required="required">
                            <input class="input" type="password" name="senha" placeholder="Senha" required="required">
                            <input class="botao-form" type="submit" value="Entrar">

                        </form>
                    </div>
                    
                </div>
            </div>
        </main>

        <footer class="container">
            <div class="row">
                <div class="col">
                    
                    
                    
                </div>
            </div>
        </footer>

        <!-- === JavaScript Bootstrap === -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    </body>

</html>