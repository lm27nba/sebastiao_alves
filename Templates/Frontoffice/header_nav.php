<?php

// Variaveis para o header:
$livros = livrosNavbar();
$banners = retonarBanners();

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sebastião Alves <?= (!$pagina_atual) ? "" : "- ". ucfirst($pagina_atual); ?></title>
    
    <!-- === JQuery === -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" 
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <!-- === CSS Bootstrap === -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" 
    crossorigin="anonymous">

    <!-- === CSS Local === -->
    <link rel="stylesheet" href="<?= $url_base;?>Public/Css/Frontoffice/lettering.css">
    <link rel="stylesheet" href="<?= $url_base;?>Public/Css/Frontoffice/style.css">

    <!-- === JavaScript Local === -->
    <script src="<?= $url_base; ?>Public/JavaScript/functions.js"></script>

</head>

<body class="p-0">

    <header class="container-fluid">

        <!-- Titulo e botão da nav-bar em ecrãs pequenos porque estão na mesma linha. -->
        <div class="row px-0" id="nav-titulo">

            <div class="col-12 d-flex justify-content-around justify-content-md-center z-1 p-0">
                
                <div class="row T0">Sebastião Alves</div>

                <div class="row">
                    <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="collapse" 
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" 
                    aria-label="Toggle navigation" id="btn_nav">

                        <img onclick="trocarBotao()" class="menu-botao" id="btn_nav_img" alt="Botão Menu"
                        src="<?= $url_base;?>Public/Imagens/Utilitarios/menu.svg">
                    </button>
                </div>
            </div>
            
            <!-- Optei por este método para criar a linha divisória porque achei mais funcional. -->
            <div class="divisoria col-10 col-md-11 mx-auto mt-2 mt-md-0 z-1 p-0"></div>

            <!-- Div para encaixar a nav-bar.  -->
            <div class="p-0 z-2">

                <nav class="navbar navbar-expand-md bg-body-tertiary p-0">
                    <div class="container-fluid p-0">
                    
                        <div class="collapse navbar-collapse d-block-md px-0" id="navbarNavDropdown">
                            <ul class="navbar-nav text-uppercase M1 mx-auto gap-md-2">

                                <li class="nav-item me-md-2">
                                    <a class="nav-link <?= ($rotas[0] == "" || $rotas[0] == "home") ? "active" : ""; ?>" 
                                    aria-current="page" href="<?= $url_base;?>">
                                        Home
                                    </a>
                                </li>

                                <li class="nav-item me-md-2">
                                    <a class="nav-link <?= ($rotas[0] == "autor") ? "active" : ""; ?>" 
                                    href="<?= $url_base;?>autor">
                                        Autor
                                    </a>
                                </li>
                                
                                <li class="nav-item me-md-2 dropdown">
                                    <a class="nav-link <?= ($rotas[0] == "livros") ? "active" : ""; ?> dropdown" 
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false" 
                                    href="<?= $url_base;?>livros>" id="livro_footer">
                                        Livros
                                    </a>
                                    <ul class="dropdown-menu SM1">
                                        <?php foreach($livros as $l): ?>
                                            <li>
                                                <a class="dropdown-item <?= ($rotas[0] == "livro" && $rotas[1] == $l["id"]) ? "active" : ""; ?>" 
                                                href="<?= $url_base;?>livros/<?= $l["id"]; ?>">
                                                    <?= $l["titulo"]; ?>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>

                                <li class="nav-item me-md-2">
                                    <a class="nav-link <?= ($rotas[0] == "imprensa") ? "active" : ""; ?>" 
                                    href="<?= $url_base;?>imprensa">
                                        Imprensa
                                    </a>
                                </li>

                                <li class="nav-item me-md-2">
                                    <a class="nav-link <?= ($rotas[0] == "contactos") ? "active" : ""; ?>" 
                                    href="<?= $url_base;?>contactos">
                                        Contactos
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <!-- A próxima div contém o carousel em modo ecrã de desktop.  -->

        <div class="row d-none d-md-block" id="banners">
            <div class="col-12 px-0">
 
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                   <div class="carousel-indicators d-flex justify-content-start">

                        <?php foreach($banners as $key => $banner): ?>
                            <?php $ativar = ($key == 0) ? 'active' : ''; ?>

                            <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="<?= $key; ?>" 
                            class="<?= $ativar; ?> me-3" aria-current="<?= $ativar; ?>" 
                            aria-label="Slide <?= ($key + 1); ?>"></button>
                        <?php endforeach; ?>
                    </div>

                    <div class="carousel-inner">
                        <?php foreach($banners as $key => $banner): ?>
                            <?php $ativar = ($key == 0) ? 'active' : ''; ?>

                            <div class="carousel-item <?= $ativar; ?>">
                                <img src="<?= $banner["img_desk"]; ?>" class="d-block imagem" alt="cabecalho<?= ($key + 1); ?>">

                                <div class="carousel-caption z-1 categoria d-none d-md-block">
                                    
                                    <div class="banner-novidade N0"><?= (!$banner["novidade"]) ? "" : "novidade"; ?></div>
                                    <h2 class="banner-titulo py-0 T2"><?= $banner["titulo"]; ?></h2>
                                    <div class="banner-texto P0"><?= $banner["subtitulo"]; ?></div>
                                    
                                    <a class="links" href="<?= $banner["link"]; ?>">
                                        <button class="btnsabermais B0">Saber Mais</button>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- A próxima div contém o carousel em modo ecrã de pequenas dimensões.  -->

        <div class="row d-block d-md-none" id="banners">
            <div class="col-12 px-0">
                
                <div id="carouselExampleInterval-pequeno" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                    <div class="carousel-indicators  d-flex justify-content-start">

                        <?php foreach($banners as $key => $banner): ?>
                            <?php $ativar = ($key == 0) ? 'active' : ''; ?>

                            <button type="button" data-bs-target="#carouselExampleInterval-pequeno" data-bs-slide-to="<?= $key; ?>" 
                            class="<?= $ativar; ?> me-3" aria-current="<?= $ativar; ?>" 
                            aria-label="Slide <?= ($key + 1); ?>"></button>
                        <?php endforeach; ?>
                    </div>
                    
                    <div class="carousel-inner">
                        <?php foreach($banners as $key => $banner): ?>
                            <?php $ativar = ($key == 0) ? 'active' : ''; ?>

                            <div class="carousel-item <?= $ativar; ?>">
                                <img src="<?= $banner["img_mob"]; ?>" class="d-block imagem" alt="cabecalho<?= ($key + 1); ?>">

                                <div class="carousel-caption z-1 categoria d-block d-md-none">

                                    <div class="banner-novidade N0"><?= (!$banner["novidade"]) ? "" : "novidade"; ?></div>
                                    <h2 class="banner-titulo py-0 T2"><?= $banner["titulo"]; ?></h2>
                                    <div class="banner-texto P0"><?= $banner["subtitulo"]; ?></div>
                                    <a class="links" href="<?= $banner["link"]; ?>">
                                        <button class="btnsabermais B0">Saber Mais</button>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>  
    </header>