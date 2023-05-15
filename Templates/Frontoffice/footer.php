<?php

// Carregar os dados relativos ao Footer:
$contactos = retornarCampoContactos();
$redes = retornarCampoRedes();

?>

    <footer>
        <div class="container">
            <!-- 1ª Linha divisória -->
            <div class="row">

                <div class="divisoria-footer col-10 col-md-12 mx-auto"></div>
            
            </div>

            <!-- Navbar do Footer -->
            <div class="row d-none d-md-block">
                             
                <div class="col-12 p-0">

                    <nav class="navbar navbar-expand-md bg-body-tertiary p-0">
                        <div class="container-fluid p-0">
                        
                            <div class="collapse navbar-collapse d-block-md px-0" id="navbarNavDropdown">
                                <ul class="navbar-nav text-uppercase M0 mx-auto gap-2">

                                    <li class="nav-item nav-item-footer me-md-3">
                                        <a class="nav-link py-0 <?= ($rotas[0] == "" || $rotas[0] == "home") ? "active" : ""; ?>" 
                                        aria-current="page" href="<?= $url_base;?>">
                                            Home
                                        </a>
                                    </li>

                                    <li class="nav-item nav-item-footer me-md-3">
                                        <a class="nav-link py-0 <?= ($rotas[0] == "autor") ? "active" : ""; ?>" 
                                        href="<?= $url_base;?>autor">
                                            Autor
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item nav-item-footer me-md-3">
                                        <a class="nav-link py-0 <?= ($rotas[0] == "livros") ? "active" : ""; ?>"
                                        href="#" onclick="aguarde()">
                                            Livros
                                        </a>
                                    </li>

                                    <li class="nav-item nav-item-footer me-md-3">
                                        <a class="nav-link py-0 <?= ($rotas[0] == "imprensa") ? "active" : ""; ?>" 
                                        href="<?= $url_base;?>imprensa">
                                            Imprensa
                                        </a>
                                    </li>

                                    <li class="nav-item nav-item-footer me-md-3">
                                        <a class="nav-link py-0 <?= ($rotas[0] == "contactos") ? "active" : ""; ?>" 
                                        href="<?= $url_base;?>contactos">
                                            Contactos
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
    
                <!-- 2ª Linha divisória -->
                <div class="divisoria-footer-dois col-11 col-md-12 py-0 mx-auto"></div>
            </div>
        </div>

        <div class="container">
            <div class="row d-flex justify-content-md-center">

                <!-- Contactos em Mobile-->
                <?php if($pagina_atual != "contactos"): ?>
                    <div class="d-block d-md-none col-12 col-md-6 text-center text-md-start footer-esquerda">

                        <h1 class="titulo-contactos FT1">contactos</h1>

                        <div class="d-flex justify-content-md-start align-content-md-start contactos">
                            <div class="col-12 col-md-5 morada">
                                <h5 class="my-0 T4">morada</h5>
                                <p class="my-0 P1 texto-contactos">
                                    <?= $contactos["morada"]; ?>
                                </p>
                            </div>

                            <div class="col-12 col-md-4 ms-md-3 telefone">
                                <h5 class="my-0 T4">telefone</h5>
                                <p class="my-0 P1 texto-contactos"> <?= $contactos["telefone"]; ?></p>
                            </div>

                            <div class="col-12 col-md-3 mail">
                                <h5 class="my-0 T4">email</h5>
                                <p class="my-0 P1 texto-contactos"> <?= $contactos["mail"]; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Contactos em Desktop-->
                <div class="d-none d-md-block col-12 col-md-6 text-center text-md-start footer-esquerda">

                        <h1 class="titulo-contactos FT1">contactos</h1>

                        <div class="d-flex justify-content-md-start align-content-md-start contactos">
                            <div class="col-12 col-md-5 morada">
                                <h5 class="my-0 T4">morada</h5>
                                <p class="my-0 P1 texto-contactos">
                                    <?= $contactos["morada"]; ?>
                                </p>
                            </div>

                            <div class="col-12 col-md-4 ms-md-3 telefone">
                                <h5 class="my-0 T4">telefone</h5>
                                <p class="my-0 P1 texto-contactos"> <?= $contactos["telefone"]; ?></p>
                            </div>

                            <div class="col-12 col-md-3 mail">
                                <h5 class="my-0 T4">email</h5>
                                <p class="my-0 P1 texto-contactos"> <?= $contactos["mail"]; ?></p>
                            </div>
                        </div>
                    </div>

                <!-- Links das Redes Sociais -->
                <div class="col-12 col-md-5 footer-direita">
                    <h1 class="titulo-redes-sociais text-center FT1">siga-me nas redes sociais</h1>

                    <div class="redes-sociais d-flex justify-content-center">
                        <a target="_blank" href="<?= $redes["instagram"]; ?>">
                            <img src="<?= $url_base;?>Public/Imagens/Redes/instagram1.svg" alt="Instagram">
                        </a>
                        <a target="_blank" href="<?= $redes["facebook"]; ?>">
                            <img src="<?= $url_base;?>Public/Imagens/Redes/facebook1.svg" alt="Facebook">
                        </a>
                        <a target="_blank" href="<?= $redes["linkedin"]; ?>">
                            <img src="<?= $url_base;?>Public/Imagens/Redes/linkedin1.svg" alt="Linkedin">
                        </a>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-md-center">

                <!-- Livro de Raclamações -->
                <div class="reclamacoes col-12 col-md-6">
                    <div class="d-flex justify-content-center justify-content-md-start">

                        <a target="_blank" class="links" href="https://www.livroreclamacoes.pt/Inicio/">
                            <img src="<?= $url_base;?>Public/Imagens/Ralc/livroreclamacoes.svg" alt="livro de reclamações">
                        </a>

                        <a target="_blank" class="links" href="https://sebastiaoalves.com/ralc">
                            <img class="ralc"  src="<?= $url_base;?>Public/Imagens/Ralc/ralc.svg" alt="RALC">
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-5 direitos">
                    <!-- Direitos -->
                    <div>
                        <p class="P0 text-center">
                            Politica de Cookies. 
                            <br>
                            Copyright &copy; 2021 Grupo MediaMaster. 
                            <br class="d-block d-md-none">
                            Todos os direitos reservados.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- === JavaScript Bootstrap === -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

    <!-- === JavaScript Local === -->
    <script src="<?= $url_base; ?>Public/JavaScript/main.js"></script>
</body>

</html>