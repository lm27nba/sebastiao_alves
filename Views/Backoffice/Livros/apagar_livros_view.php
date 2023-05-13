<main class="container-fluid p-0">                           
    <div class="row m-0">                            
        <div class="col-10 caixa m-auto">                                                        
             
            <?php if(!$livro): ?>

                <div class="mx-auto mensagem_erro">
                    Livro inexistente na base de dados! Volte a tentar.
                </div>

                <a class="link" href="<?= $url_backoffice; ?>livros">
                    <button class="botaoneutro">Voltar</button>
                </a>

            <?php else: ?>

                <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                    <div class="col-10 texto">
                        <span class="subtitulo"><?= $pagina_atual; ?>:</span> Apagar (<?= $livro["titulo"]; ?>)? 
                    </div>

                    <div class="col-10 mt-3">
                        <img class="imagem_apagar" src="<?= $livro["imagem"]; ?>" alt="imagem do livro">
                    </div>

                    <div class="col-10 mt-3">
                        <?= substr($livro["texto"], 0, 200); ?>...
                    </div>
                </div>

                <div class="col-12 mt-3 mx-auto">
                    <a class="link" href="<?= $url_backoffice; ?>livros">
                        <button class="botaonok">Cancelar</button>
                    </a>

                    <a class="link" href="<?= $url_backoffice; ?>livros/apagar/<?= $id; ?>/true">
                        <button class="botaook">Apagar</button>
                    </a>
                </div>
            <?php endif; ?>          
        </div>
    </div>  
</main>  