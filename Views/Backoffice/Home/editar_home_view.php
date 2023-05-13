<main class="container-fluid p-0">                           
    <div class="row m-0">                            
        <div class="col-10 caixa m-auto">                                                        

            <div class="col-12 subtitulo1">
                Editar (<span class="subtitulo"><?= $pagina_atual; ?></span>). 
            </div>
        
            <form id="formulario" class="col-12 mx-auto" method="POST">
                <div class="col-10 mx-auto">

                    <div class="col-12 mt-4">
                        <label class="texto2 w-100" for="imagem">Link da imagem do autor na página HOME:</label>

                        <input class="input1" type="text" id="imagem" name="img_home" required="required"
                        value="<?= $home["img_home"]; ?>">

                        <a target="_blank" class="link" href="<?= $url_base; ?>FileManager/tinyfilemanager.php">
                            <button class="botaoneutro" type="button">
                                Gestor Ficheiros
                            </button>
                        </a>
                    </div> 

                    <div class="col-12 mt-4">
                        <label class="texto2 w-100" for="texto">Texto do campo "Ultimos Livros":</label>

                        <textarea class="input1" type="text" name="texto_home" id="texto">
                            <?= $home["texto_home"]; ?>
                        </textarea>

                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#texto' ) )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
                    </div>
                </div>

                <input class="botaook mt-4" for="formulario" type="submit" value="Editar">
            </form>                   
        </div>
    </div>  
</main> 