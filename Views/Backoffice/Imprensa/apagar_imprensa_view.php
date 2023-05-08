<main class="container-fluid p-0">                           
    <div class="row m-0">                            
        <div class="col-10 caixa m-auto">                                                        
             
            <?php if(!$imprensa): ?>

                <div class="mx-auto mensagem_erro">
                    Publicação inexistente na base de dados! Volte a tentar.
                </div>

                <a class="link" href="<?= $url_backoffice; ?>imprensa">
                    <button class="botaoneutro">Voltar</button>
                </a>

            <?php else: ?>

                <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                    <div class="col-10 texto">
                        <span class="subtitulo"><?= $pagina_atual; ?>:</span> Apagar (<?= $imprensa["quando"]; ?>)? 
                    </div>
                
                    <div class="col-10 mt-3">
                        <?= $imprensa["titulo"]; ?>
                    </div>

                    <div class="col-10 mt-3">
                        <img class="imagem_apagar" src="<?= $imprensa["imagem"]; ?>" alt="imagem da publicação">
                    </div>

                    <div class="col-10 mt-3">
                        <?= substr($imprensa["texto"], 0, 200); ?>...
                    </div>
                </div>

                <div class="col-12 mt-3 mx-auto">
                    <a class="link" href="<?= $url_backoffice; ?>imprensa">
                        <button class="botaonok">Cancelar</button>
                    </a>

                    <a class="link" href="<?= $url_backoffice; ?>imprensa/apagar/<?= $id; ?>/true">
                        <button class="botaook">Apagar</button>
                    </a>
                </div>
            <?php endif; ?>          
        </div>
    </div>  
</main>  