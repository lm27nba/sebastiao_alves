<main class="container-fluid p-0">                           
    <div class="row m-0">                            
        <div class="col-10 caixa m-auto">    

            <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                <div class="col-10 texto subtitulo1">
                    Imagem do autor da página (<span class="subtitulo"><?= $pagina_atual; ?></span>). 
                </div>

                <div class="col-10 mt-3">
                    <img class="imagem_autor" src="<?= $home["img_home"]; ?>" alt="foto autor">
                    <hr>
                </div>

                <div class="col-10 texto1 mt-3">
                    <?= $home["texto_home"]; ?>
                    <hr>
                </div>             
            </div>

            <div class="col-12 mt-3 mx-auto">

                <a class="link" href="<?= $url_backoffice; ?>home/editar">
                    <button class="botao3">Editar Autor</button>
                </a>
            </div>         
        </div>
    </div>  
</main>  