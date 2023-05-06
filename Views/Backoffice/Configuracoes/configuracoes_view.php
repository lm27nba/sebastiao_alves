<main class="container-fluid p-0">
    <div class="row m-0">
        <div class="col-10 caixa">

            <div class="subtitulo text-center">alterar senha</div>

            <?php if(empty($mensagem)): ?>
                <div class="col-12 mx-auto">

                    <form id="alterar_senha" method="POST" class="formulario1 gap-2 mt-4">
                        <div class="col-3 d-flex flex-column gap-3 mx-auto">
                            <input class="input1 text-center px-2" type="text" name="senha_antiga" 
                            placeholder="Senha Atual" required="required">

                            <input class="input1 text-center px-2" type="text" name="senha_nova" 
                            placeholder="Nova Senha" required="required">

                            <input class="input1 text-center px-2" type="text" name="confirmar_senha" 
                            placeholder="Confirmar Senha" required="required">
                        </div>
                        <div class="mt-3">
                        
                            <a class="link" href="<?= $url_backoffice; ?>">
                                <button type="button" class="botaonok">Cancelar</button>
                            </a>
                            <input for="alterar_senha" class="botaook" type="submit" value="Alterar Senha">

                        </div>
                    </form>
                </div>
            <?php elseif($mensagem == "ok"): ?> 

                <div class="mensagem_sucesso">Senha alterada com sucesso.</div>
                <a class="link" href="<?= $url_backoffice; ?>">
                    <button class="botaoneutro">Fechar</button>
                </a>

            <?php elseif($mensagem == "erro"): ?>

                <div class="mensagem_erro">Operação falhou.</div>
                <a class="link" href="<?= $url_backoffice. "configuracoes"; ?>">
                    <button class="botaoneutro">Voltar</button>
                </a>

            <?php else: ?>
                
                <?php 
                    header("Location: " .$url_backoffice. "404"); 
                    exit();
                ?>

            <?php endif; ?>
        </div>
    </div>
</main>