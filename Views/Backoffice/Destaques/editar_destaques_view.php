<main class="container-fluid p-0">                           
    <div class="row m-0">                            
        <div class="col-10 caixa m-auto">

            <div class="col-12 texto">
                <span class="subtitulo"><?= $pagina_atual; ?>:</span>  Editar. 
            </div>
        
            <form id="formulario" class="col-12 mx-auto" method="POST">
                <div class="col-10 mx-auto">

                    <div class="col-12 mt-4">
                        <select name="livro" id="livro" class="input">

                            <?php foreach($lista_livros as $l): ?>
                                <option value="<?= $l["id"]; ?>"><?= $l["titulo"]; ?></option>
                            <?php endforeach; ?>

                        </select>
                    </div>

                    <div class="col-12 mt-4">
                        <label class="texto2 w-100" for="destaque">Observação do destaque:</label>  

                        <input class="input" type="text" name="destaque" required="required" 
                        value="<?= $destaque_especifico["destaque"]; ?>" id="destaque">
                    </div>
                </div>

                <input class="botaook mt-4" for="formulario" type="submit" value="Editar">
            </form>           
        </div>
    </div>  
</main>   