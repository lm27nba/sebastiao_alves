<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sebastião Alves</title>

    <!-- === CSS Bootstrap === -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" 
    crossorigin="anonymous">

    <!-- === CSS Local === -->

    <link rel="stylesheet" href="<?= $url_base;?>Public/Css/Frontoffice/lettering.css">
    <link rel="stylesheet" href="<?= $url_base;?>Public/Css/Frontoffice/style.css">

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
                    aria-label="Toggle navigation">
                        <img class="menu-botao" src="<?= $url_base;?>Uploads/Desktop/menu.svg" alt="Botão Menu">
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
                                    aria-current="page" href="<?= $url_base;?>">Home</a>
                                </li>

                                <li class="nav-item me-md-2">
                                    <a class="nav-link <?= ($rotas[0] == "autor") ? "active" : ""; ?>" 
                                    href="<?= $url_base;?>autor">Autor</a>
                                </li>
                                
                                <li class="nav-item me-md-2 dropdown">
                                    <a class="nav-link <?= ($rotas[0] == "livros") ? "active" : ""; ?> dropdown" 
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">
                                        Livros
                                    </a>
                                    <ul class="dropdown-menu SM1">
                                        <li><a class="dropdown-item <?= ($rotas[0] == "livro" && $rotas[1] == $l["id"]) ? "active" : ""; ?>" href="<?= $url_base;?>livros/<?= $id; ?>">Senhora do Amor e da Guerra</a></li>
                                        <li><a class="dropdown-item" href="<?= $url_base;?>livros.html">O Caracol Estrábico</a></li>
                                        <li><a class="dropdown-item" href="<?= $url_base;?>livros.html">O Coleccionador de Amnésias</a></li>
                                        <li><a class="dropdown-item" href="<?= $url_base;?>livros.html">O Velho que Pensava que Fugia</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item me-md-2">
                                    <a class="nav-link <?= ($rotas[0] == "imprensa") ? "active" : ""; ?>" href="<?= $url_base;?>imprensa">Imprensa</a>
                                </li>

                                <li class="nav-item me-md-2">
                                    <a class="nav-link <?= ($rotas[0] == "contactos") ? "active" : ""; ?>" href="<?= $url_base;?>contactos">Contactos</a>
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

                    <div class="carousel-indicators  d-flex justify-content-start">
                        <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" 
                        class="active mr-3" aria-current="true" aria-label="Slide 1"></button>

                        <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1" 
                        class="mr-3" aria-label="Slide 2"></button>

                        <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2" 
                        class="mr-3" aria-label="Slide 3"></button>

                        <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="3" 
                        class="mr-3" aria-label="Slide 4"></button>
                    </div>
                    
                    <div class="carousel-inner">
                        
                        <div class="carousel-item active">
                            <img src="<?= $url_base;?>Uploads/Desktop/cabecalho1.jpg" class="d-block imagem" alt="cabecalho1">

                            <div class="carousel-caption z-1 categoria d-none d-md-block">

                                <div class="banner-novidade N0">novidade</div>
                                <h2 class="banner-titulo py-0 T2">senhora do amor e da guerra</h2>
                                <div class="banner-texto P0">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus obcaecati ut eligendi quis 
                                    cumque fuga harum reprehenderit eum molestiae omnis rerum? Vel, odio doloremque quae id aliquid 
                                    accusamus quos soluta minima!
                                </div>
                                <button class="btnsabermais B0">saber mais</button>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="<?= $url_base;?>Uploads/Desktop/cabecalho2.jpg" class="d-block imagem" alt="cabecalho2">

                            <div class="carousel-caption z-1 categoria d-none d-md-block">

                                <div class="banner-novidade N0"></div>
                                <h2 class="banner-titulo py-0 T2">o caracol estrábico</h2>
                                <div class="banner-texto P0">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus obcaecati ut eligendi quis 
                                    cumque fuga harum reprehenderit eum molestiae omnis rerum? Vel, odio doloremque quae id aliquid 
                                    accusamus quos soluta minima!
                                </div>
                                <button class="btnsabermais B0">saber mais</button>
                            </div>
                        </div>
                        
                        <div class="carousel-item">
                            <img src="<?= $url_base;?>Uploads/Desktop/cabecalho3.jpg" class="d-block imagem" alt="cabecalho3">

                            <div class="carousel-caption z-1 categoria d-none d-md-block">

                                <div class="banner-novidade N0"></div>
                                <h2 class="banner-titulo py-0 T2">o colecionador de amnésias</h2>
                                <div class="banner-texto P0">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus obcaecati ut eligendi quis 
                                    cumque fuga harum reprehenderit eum molestiae omnis rerum? Vel, odio doloremque quae id aliquid 
                                    accusamus quos soluta minima!
                                </div>
                                <button class="btnsabermais B0">saber mais</button>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="<?= $url_base;?>Uploads/Desktop/cabecalho4.jpg" class="d-block imagem" alt="cabecalho4">

                            <div class="carousel-caption z-1 categoria d-none d-md-block">

                                <div class="banner-novidade N0"></div>
                                <h2 class="banner-titulo py-0 T2">o velho que pensava que fugia</h2>
                                <div class="banner-texto P0">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus obcaecati ut eligendi quis 
                                    cumque fuga harum reprehenderit eum molestiae omnis rerum? Vel, odio doloremque quae id aliquid 
                                    accusamus quos soluta minima!
                                </div>
                                
                                <button class="btnsabermais B0">saber mais</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- A próxima div contém o carousel em modo ecrã de pequenas dimensões.  -->

        <div class="row d-block d-md-none" id="banners">
            <div class="col-12 px-0">
                
                <div id="carouselExampleInterval-pequeno" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

                    <div class="carousel-indicators  d-flex justify-content-start">
                        <button type="button" data-bs-target="#carouselExampleInterval-pequeno" data-bs-slide-to="0" 
                        class="active me-3" aria-current="true" aria-label="Slide 1"></button>

                        <button type="button" data-bs-target="#carouselExampleInterval-pequeno" data-bs-slide-to="1" 
                        class="me-3" aria-label="Slide 2"></button>

                        <button type="button" data-bs-target="#carouselExampleInterval-pequeno" data-bs-slide-to="2" 
                        class="me-3" aria-label="Slide 3"></button>

                        <button type="button" data-bs-target="#carouselExampleInterval-pequeno" data-bs-slide-to="3" 
                        class="me-3" aria-label="Slide 4"></button>
                    </div>
                    
                    <div class="carousel-inner">
                        
                        <div class="carousel-item active">
                            <img src="<?= $url_base;?>Uploads/Mobile/cabecalho1.jpg" class="d-block imagem" alt="cabecalho1">

                            <div class="carousel-caption z-1 categoria d-block d-md-none">

                                <div class="banner-novidade N0">novidade</div>
                                <h2 class="banner-titulo py-0 T2">senhora do amor e da guerra</h2>
                                <div class="banner-texto P0">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus obcaecati ut eligendi quis 
                                    cumque ratione cum officiis quo quod nihil, asperiores nulla libero neque nemo fuga harum 
                                    reprehenderit eum molestiae omnis rerum? Vel, odio doloremque quae id aliquid accusamus 
                                    quos soluta minima!
                                </div>
                                <button class="btnsabermais B0">saber mais</button>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="<?= $url_base;?>Uploads/Mobile/cabecalho2.jpg" class="d-block imagem" alt="cabecalho2">

                            <div class="carousel-caption z-1 categoria d-block d-md-none">

                                <div class="banner-novidade N0"></div>
                                <h2 class="banner-titulo py-0 T2">o caracol estrábico</h2>
                                <div class="banner-texto P0">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus obcaecati ut eligendi quis 
                                    cumque ratione cum officiis quo quod nihil, asperiores nulla libero neque nemo fuga harum 
                                    reprehenderit eum molestiae omnis rerum? Vel, odio doloremque quae id aliquid accusamus 
                                    quos soluta minima!
                                </div>
                                <button class="btnsabermais B0">saber mais</button>
                            </div>
                        </div>
                        
                        <div class="carousel-item">
                            <img src="<?= $url_base;?>Uploads/Mobile/cabecalho3.jpg" class="d-block imagem" alt="cabecalho3">

                            <div class="carousel-caption z-1 categoria d-block d-md-none">

                                <div class="banner-novidade N0"></div>
                                <h2 class="banner-titulo py-0 T2">o colecionador de amnésias</h2>
                                <div class="banner-texto P0">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus obcaecati ut eligendi quis 
                                    cumque ratione cum officiis quo quod nihil, asperiores nulla libero neque nemo fuga harum 
                                    reprehenderit eum molestiae omnis rerum? Vel, odio doloremque quae id aliquid accusamus 
                                    quos soluta minima!
                                </div>
                                <button class="btnsabermais B0">saber mais</button>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="<?= $url_base;?>Uploads/Mobile/cabecalho4.jpg" class="d-block imagem" alt="cabecalho4">

                            <div class="carousel-caption z-1 categoria d-block d-md-none">

                                <div class="banner-novidade N0"></div>
                                <h2 class="banner-titulo py-0 T2">o velho que pensava que fugia</h2>
                                <div class="banner-texto P0">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus obcaecati ut eligendi quis 
                                    cumque ratione cum officiis quo quod nihil, asperiores nulla libero neque nemo fuga harum 
                                    reprehenderit eum molestiae omnis rerum? Vel, odio doloremque quae id aliquid accusamus 
                                    quos soluta minima!
                                </div>
                                
                                <button class="btnsabermais B0">saber mais</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </header>