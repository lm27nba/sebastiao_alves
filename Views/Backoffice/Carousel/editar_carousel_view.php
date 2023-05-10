<main class="container-fluid p-0">                           
    <div class="row m-0">                            
        <div class="col-10 caixa m-auto">                                                        
                                
            <div class="col-12 texto">
                <span class="subtitulo"><?= $pagina_atual; ?>:</span> Editar um Banner. 
            </div>
        
            <form id="formulario" class="col-12 mx-auto" method="POST">
                <div class="col-10 mx-auto">

                    <div class="col-12 my-4">
                        <label class="texto2 w-100" for="img_desk">Link da imagem do Banner para desktop:</label>

                        <input class="input1" type="text" id="img_desk" name="img_desk" required="required"
                        value="<?= $banner["img_desk"]; ?>">

                        <label class="texto2 w-100 mt-4" for="img_mob">Link da imagem do Banner para ecrãs mobile:</label>

                        <input class="input1" type="text" id="img_mob" name="img_mob" required="required"
                        value="<?= $banner["img_mob"]; ?>">
                    </div>  

                    <a target="_blank" class="link" href="<?= $url_base; ?>FileManager/tinyfilemanager.php">
                        <button class="botaoneutro" type="button">
                            Gestor Ficheiros
                        </button>
                    </a>

                    <div class="col-12 mt-4">
                        <label class="texto2 w-100" for="link">Link do banner "Saber Mais":</label>

                        <input class="input1" type="text" name="link" id="link" required="required" 
                        value="<?= $banner["link"]; ?>">
                    </div>

                    <div class="col-12 mt-4">
                        <label class="texto2 w-100" for="titulo">Titulo do Banner:</label>  

                        <input class="input1" type="text" name="titulo" required="required" 
                        value="<?= $banner["titulo"]; ?>">
                    </div>

                    <div class="col-12 mt-4">
                        <label class="texto2 w-80" for="subtitulo">Subtitulo do Banner: (Máximo de 350 caracteres)</label>

                        <input class="mb-3" readonly type="text" name="remLen" size="3" maxlenght="3" value="350">

                        <textarea name="subtitulo" id="subtitulo" class="input1"
                        onkeydown="textCounter(this.form.subtitulo,this.form.remLen,350);"
                        onkeyup="textCounter(this.form.subtitulo,this.form.remLen,350);"><?= $banner["subtitulo"]; ?></textarea>

                    </div>

                <input class="botaook mt-4" for="formulario" type="submit" value="Guardar">
            </form>            
        </div>
    </div>  
</main>   