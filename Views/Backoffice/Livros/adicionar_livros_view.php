<main class="container-fluid p-0">                           
    <div class="row m-0">                            
        <div class="col-10 caixa m-auto">                                                        
                                
            <div class="col-12 texto">
                <span class="subtitulo"><?= $pagina_atual; ?>:</span> Criar novo.
            </div>
        
            <form id="formulario" class="col-12 mx-auto" method="POST">
                <div class="col-10 mx-auto">

                    <div class="col-12 mt-4">
                        <label class="texto2 w-100" for="imagem">Link da Imagem da capa do livro:</label>

                        <input class="input1" type="text" id="imagem" name="imagem" required="required"
                        placeholder="Insira o link da imagem através do gestor de ficheiros">

                        <a target="_blank" class="link" href="<?= $url_base; ?>FileManager/tinyfilemanager.php">
                            <button class="botaoneutro" type="button">
                                Gestor Ficheiros
                            </button>
                        </a>
                    </div>  

                    <div class="col-12 mt-4">
                        <label class="texto2 w-100" for="titulo">Titulo do Livro:</label>  

                        <input class="input1" type="text" name="titulo" required="required" 
                        placeholder="Insira o título do livro" id="titulo">
                    </div>

                    <div class="col-12 mt-4">
                        <label class="texto2 w-100" for="texto">Descrição do livro:</label>

                        <textarea name="texto" id="texto" placeholder="Insira aqui um texto sobre o livro."></textarea>

                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#texto' ) )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
                    </div>
                </div>

                <input class="botaook mt-4" for="formulario" type="submit" value="Guardar">
            </form>            
        </div>
    </div>  
</main>   