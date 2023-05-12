<main class="pagina-total">

    <!-- "Caixa" da página LIVROS -->

    <div id="caixa_entrada">     
        <div class="container-fluid p-0 z-2 position-relative">
            <div class="row offset-0 offset-md-1 p-0" id="caixa_autor">
                
                <div class="col-10 mx-auto nome_livros M1 p-0">
                    Livros
                </div>

                <div class="col-10 mx-auto subtitulo_livros T1 p-0">
                    <?= $livro["titulo"]; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Area especifica do conteudo do site -->

    <div class="area-texto">     
        <div class="container p-0">
            <div class="row mx-0">
                
                <div class="col-11 px-0 area_livros mx-auto">
                    <img class="livros mx-auto d-block float-lg-start" 
                    src="<?= $livro["imagem"];?>" alt="livro-cont1">
                
                    <div class="texto-livros P0"><?= $livro["texto"];?></div>

                    <div class="voltar-atras-livros">
                        <a href="<?= $url_base; ?>" class="links">
                            <button class="btnsabermais B0 btnlivros mx-auto">Voltar Atrás</button>
                        </a>
                    </div>
                               
                </div>
            </div>
        </div>
    </div>
</main>