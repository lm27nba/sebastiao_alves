<main class="container p-0">
    <div class="row">
        <div class="col-12 box d-flex flex-column justify-content-center align-items-center mt-5">
            
            <div class="subtitle mt-3">login</div>
            
            <?php if($erro): ?>

                <div class="error">Login inválido, tente novamente.</div>

            <?php endif; ?>

            <form class="form" action="" method="POST">
                <input class="inputs" type="text" name="login" placeholder="Nome" required="required">
                <input class="inputs" type="password" name="pass" placeholder="Senha" required="required">
                <input class="button" type="submit" value="Entrar">
            </form>
            
        </div>
    </div>
</main>