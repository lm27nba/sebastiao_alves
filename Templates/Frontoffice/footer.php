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
                                        <a class="nav-link py-0 active" aria-current="page" href="<?= $url_base;?>home.html">Home</a>
                                    </li>

                                    <li class="nav-item nav-item-footer me-md-3">
                                        <a class="nav-link py-0" href="<?= $url_base;?>autor.html">Autor</a>
                                    </li>
                                    
                                    <li class="nav-item nav-item-footer me-md-3">
                                        <a class="nav-link py-0" href="<?= $url_base;?>livros.html">Livros</a>
                                    </li>

                                    <li class="nav-item nav-item-footer me-md-3">
                                        <a class="nav-link py-0" href="<?= $url_base;?>imprensa.html">Imprensa</a>
                                    </li>

                                    <li class="nav-item nav-item-footer me-md-3">
                                        <a class="nav-link py-0" href="<?= $url_base;?>contactos.html">Contactos</a>
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

        <!-- Contactos, Links e Direitos -->
        <div class="container">
            <div class="row d-flex justify-content-md-center">

                <div class="col-12 col-md-6 text-center text-md-start footer-esquerda">

                    <h1 class="titulo-contactos FT1">contactos</h1>

                    <div class="d-flex justify-content-md-start align-content-md-start contactos">
                        <div class="col-12 col-md-5 morada">
                            <h5 class="my-0 T4">morada</h5>
                            <p class="my-0 P1 texto-contactos">
                                Lorem ipsum dolor sit amet, 16 <br>
                                1234-543 Lorem
                            </p>
                        </div>

                        <div class="col-12 col-md-4 ms-md-3 telefone">
                            <h5 class="my-0 T4">telefone</h5>
                            <p class="my-0 P1 texto-contactos">+351 123 456 789</p>
                        </div>

                        <div class="col-12 col-md-3 mail">
                            <h5 class="my-0 T4">email</h5>
                            <p class="my-0 P1 texto-contactos">lorem@lorem.pt</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-5 footer-direita">

                    <h1 class="titulo-redes-sociais text-center FT1">siga-me nas redes sociais</h1>

                    <div class="redes-sociais d-flex justify-content-center">
                        <a href="#">
                            <img src="<?= $url_base;?>Uploads/Desktop/instagram1.svg" alt="Instagram">
                        </a>
                        <a href="#">
                            <img src="<?= $url_base;?>Uploads/Desktop/facebook1.svg" alt="Facebook">
                        </a>
                        <a href="#">
                            <img src="<?= $url_base;?>Uploads/Desktop/linkedin1.svg" alt="Linkedin">
                        </a>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-md-center">

                <div class="reclamacoes col-12 col-md-6">
                    <div class="d-flex justify-content-center justify-content-md-start">
                        <img src="<?= $url_base;?>Uploads/Desktop/livroreclamacoes.svg" alt="livro de reclamações">
                        <img class="ralc"  src="<?= $url_base;?>Uploads/Desktop/ralc.svg" alt="RALC">
                    </div>
                </div>

                <div class="col-12 col-md-5 direitos">
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
</body>

</html>