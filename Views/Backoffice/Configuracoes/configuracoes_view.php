<main class="container-fluid p-0">
    <div class="row m-0">
        <div class="col-10 caixa">

            <div class="subtitulo text-center">alterar senha</div>

            <div class="col-12 mx-auto">

                <form method="POST" class="formulario1 gap-2 mt-4">

                    <div class="col-3 d-flex flex-column gap-3 mx-auto">
                        <input class="input1 text-center px-2" type="password" name="senha_antiga" 
                        placeholder="Senha Atual" required="required">

                        <input class="input1 text-center px-2" type="password" name="senha_nova" 
                        placeholder="Nova Senha" required="required">

                        <input class="input1 text-center px-2" type="password" name="confirmar_senha" 
                        placeholder="Confirmar Senha" required="required">
                    </div>
                    <div class="mt-3">
                    
                        <a class="link" href="<?= $url_backoffice; ?>">
                            <button type="button" class="botaonok">Cancelar</button>
                        </a>
                        <input class="botaook" type="submit" value="Alterar Senha">
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>