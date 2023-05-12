<main class="pagina-total">

    <!-- "Caixa" da página CONTACTOS -->

    <div id="caixa_entrada">     
        <div class="container-fluid p-0 z-2 position-relative">
            <div class="row offset-0 offset-md-1 p-0" id="caixa_autor">
                
                <div class="col-10 mx-auto nome_livros M1 p-0">
                    Contactos
                </div>

                <div class="col-10 mx-auto subtitulo_livros T1 p-0">
                    Pode contactar-me através do e-mail ou telefone
                </div>
            </div>
        </div>
    </div>

    <!-- Area especifica do conteudo do site -->

    <div class="area-texto">     
        <div class="container-fluid p-0">

            <div class="row mx-0">
                
                <div class="col-8 px-0 area_contactos mx-auto">
                    
                    <div class="col-12 d-flex flex-column flex-md-row justify-content-center align-items-center gap-5">
                        <div class="col-12 col-md-3 text-center">
                            <h5 class="my-0 T4">telefone</h5>
                            <p class="my-0 P1 texto-contactos mx-md-auto"><?= $contactos["telefone"]; ?></p>
                        </div>

                        <div class="col-12 col-md-5 text-center">
                            <h5 class="my-0 T4">morada</h5>
                            <p class="my-0 P1 texto-contactos mx-md-auto">
                                <?= $contactos["morada"]; ?>
                            </p>
                        </div>

                        <div class="col-12 col-md-3 text-center">
                            <h5 class="my-0 T4">email</h5>
                            <p class="my-0 P1 texto-contactos mx-md-auto"><?= $contactos["mail"]; ?></p>
                        </div>
                    </div>

                    <div class="separador-contactos mx-auto"></div>

                    <div class="col-12 d-flex justify-content-center align-items-center">

                        <div class="col-6 text-center">
                            <h5 class="my-0 T4">horário</h5>
                            <p class="my-0 P1 texto-contactos mx-md-auto">
                            <?= $contactos["horario"]; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>