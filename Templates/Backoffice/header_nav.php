<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Backoffice - Sebastião Alves</title>

    <!-- === CSS Bootstrap === -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" 
    crossorigin="anonymous">

    <!-- === Link para o FileManager === -->
    <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>

    <!-- === CSS Local === -->
    <link rel="stylesheet" href="<?= $url_base; ?>Public/Css/Backoffice/backoffice.css">

</head>

<body>
    <header class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 titulo text-center">
                Backoffice (<span id="rota"><?= $pagina_atual; ?></span>)
            </div>
        </div>   
        
        <div class="row m-0">
            <div class="col-12 mx-auto px-2">
                <div class="col-12 navbar">
                    <a class="link" href="<?= $url_backoffice. "inicio"; ?>">
                        <button class="botao <?= (($pagina_atual != "inicio") ? "" : "active");?>">inicio</button>
                    </a>

                    <a class="link" href="<?= $url_backoffice. "carousel"; ?>">
                        <button class="botao <?= (($pagina_atual != "carousel") ? "" : "active");?>">carousel</button>
                    </a>

                    <a class="link" href="<?= $url_backoffice. "home"; ?>">
                        <button class="botao <?= (($pagina_atual != "home") ? "" : "active");?>">home</button>
                    </a>

                    <a class="link" href="<?= $url_backoffice. "autor"; ?>">
                        <button class="botao <?= (($pagina_atual != "autor") ? "" : "active");?>">autor</button>
                    </a>

                    <a class="link" href="<?= $url_backoffice. "livros"; ?>">
                        <button class="botao <?= (($pagina_atual != "livros") ? "" : "active");?>">livros</button>
                    </a>

                    <a class="link" href="<?= $url_backoffice. "destaques"; ?>">
                        <button class="botao <?= (($pagina_atual != "destaques") ? "" : "active");?>">destaques</button>
                    </a>

                    <a class="link" href="<?= $url_backoffice. "imprensa"; ?>">
                        <button class="botao <?= (($pagina_atual != "imprensa") ? "" : "active");?>">imprensa</button>
                    </a>

                    <a class="link" href="<?= $url_backoffice. "contactos"; ?>">
                        <button class="botao <?= (($pagina_atual != "contactos") ? "" : "active");?>">contactos</button>
                    </a>

                    <a class="link" href="<?= $url_base. "backoffice/redes"; ?>">
                        <button class="botao <?= (($pagina_atual != "redes") ? "" : "active");?>">redes</button>
                    </a>

                    <a class="link" href="<?= $url_backoffice. "configurações"; ?>">
                        <button class="botao <?= (($pagina_atual != "configurações") ? "" : "active");?>">configurações</button>
                    </a>

                    <a class="link" href="<?= $url_backoffice. "sair"; ?>">
                        <button class="botao <?= (($pagina_atual != "sair") ? "" : "active");?>">sair</button>
                    </a>
                </div>
            </div>
        </div>
    </header>
