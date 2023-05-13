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

                <div class="col-12 texto">
                    <span class="subtitulo"><?= $pagina_atual; ?>:</span> Editar uma publicação. 
                </div>
            
                <form id="formulario" class="col-12 mx-auto" method="POST">
                    <div class="col-10 mx-auto">

                        <div class="col-12 mt-4">
                            <label class="texto2 w-100" for="imagem">Link da Imagem da Imprensa:</label>

                            <input class="input1" type="text" id="imagem" name="imagem" required="required"
                            value="<?= $imprensa["imagem"]; ?>">

                            <a target="_blank" class="link" href="<?= $url_base; ?>FileManager/tinyfilemanager.php">
                                <button class="botaoneutro" type="button">
                                    Gestor Ficheiros
                                </button>
                            </a>
                        </div>  

                        <div class="col-12 mt-4">
                            <div class="d-flex flex-row" >
                                <label class="texto2 w-75" for="titulo">Titulo da Imprensa:</label>  
                                <label class="texto2 w-25" for="posicao">Posição na Grelha:</label>  
                            </div>

                            <input class="input1" type="text" name="titulo" required="required" 
                            value="<?= $imprensa["titulo"]; ?>" id="titulo">

                            <input class="input3 text-center" type="number" name="posicao" required="required" 
                            value="<?= $imprensa["posicao"]; ?>" step="0" min="1" max="<?= intval($pos_max); ?>" id="posicao">
                        </div>

                        <div class="col-12 mt-4">
                            <label class="texto2 w-100" for="texto">Texto da Imprensa:</label>

                            <textarea class="input1" type="text" name="texto" id="texto">
                                <?= $imprensa["texto"]; ?>
                            </textarea>

                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#texto' ) )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>
                        </div>

                        <div class="col-12 mt-4">
                            <label class="texto2 w-100" for="quando">Data da publicação na imprensa:</label>

                            <input class="input1" type="text" name="quando" id="quando" required="required" 
                            value="<?= $imprensa["quando"]; ?>">
                        </div>
                    </div>

                    <input class="botaook mt-4" for="formulario" type="submit" value="Guardar">
                </form>  
            <?php endif; ?>          
        </div>
    </div>  
</main>   