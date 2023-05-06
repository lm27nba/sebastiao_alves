<main class="container-fluid p-0">
    <div class="row m-0">
        <div class="col-10 caixa">
            
            <div class="col-10 mx-auto">
                <div class="subtitulo text-center">editar (<span id="rota"><?= $pagina_atual; ?></span>)</div>

                <form id="edit_contactos" method="POST" class="formulario1 gap-2 mt-4">

                    <div class="subtitulo1">Telefone:</div>
                    <input class="input1 px-2" type="text" name="telefone" required="required"
                    value="<?= $contactos["telefone"]; ?>">

                    <div class="subtitulo1">Morada:</div>
                    <input class="input1 px-2" type="text" name="morada"  required="required"
                    value="<?= $contactos["morada"]; ?>">

                    <div class="subtitulo1">Email:</div>
                    <input class="input1 px-2" type="text" name="mail" required="required" 
                    value="<?= $contactos["mail"]; ?>">

                    <div class="subtitulo1">Horário:</div>
                    <input class="input1 px-2" type="text" name="horario"  required="required"
                    value="<?= $contactos["horario"]; ?>">

                    <div class="mt-3">
                    
                    <a class="link" href="<?= $url_backoffice . "contactos"; ?>">
                        <button type="button" class="botaonok">Cancelar</button>
                    </a>
                    <input for="edit_contactos" class="botaook" type="submit" value="Editar">

                </div>
                </form>

               
            </div>
        </div>
    </div>
</main>