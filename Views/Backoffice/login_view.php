<main class="container-fluid p-0">

    <div class="row m-0">
        <div class="col-9 caixa d-flex flex-column justify-content-center align-items-center mt-5">
            
            <div class="subtitulo mt-3">login</div>
            
            <?php if($erro): ?>

                <div class="mensagem_erro">Login inválido, tente novamente.</div>

            <?php endif; ?>

            <form class="formulario" action="" method="POST">
                <input class="input" type="text" name="login" placeholder="Usuário" required="required">
                <input class="input" type="password" name="pass" placeholder="Senha" required="required">
                <input class="botao mx-auto" type="submit" value="Entrar">
            </form>      
        </div>
    </div>
</main>