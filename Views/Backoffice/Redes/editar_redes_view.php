<main class="container-fluid p-0">
    <div class="row m-0">
        <div class="col-10 caixa">
            
            <div class="col-10 mx-auto">
                <div class="subtitulo text-center">editar (<span id="rota"><?= $pagina_atual; ?></span>)</div>

                <form id="edit_redes" method="POST" class="formulario1 gap-2 mt-4">

                    <div class="subtitulo1">Instagram:</div>
                    <input class="input1 px-2" type="text" name="telefone" required="required"
                    value="<?= $redes["instagram"]; ?>">

                    <div class="subtitulo1">Facebook:</div>
                    <input class="input1 px-2" type="text" name="morada" required="required" 
                    value="<?= $redes["facebook"]; ?>">

                    <div class="subtitulo1">Linkedin:</div>
                    <input class="input1 px-2" type="text" name="mail" required="required" 
                    value="<?= $redes["linkedin"]; ?>">

                    <div class="mt-3">
                    
                        <a class="link" href="<?= $url_backoffice . "redes"; ?>">
                            <button type="button" class="botaonok">Cancelar</button>
                        </a>
                        <input for="edit_redes" class="botaook" type="submit" value="Editar">

                    </div>
                </form>
            </div>
        </div>
    </div>
</main>