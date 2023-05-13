<main class="container-fluid p-0">
    <div class="row m-0">
        <div class="col-10 caixa">

            <div class="col-12">
                <div class="subtitulo">telefone</div>
                <div class="texto"><?= $contactos["telefone"]; ?></div>
            </div>

            <hr>
            <div class="col-12">
                <div class="subtitulo">morada</div>
                <div class="texto"><?= $contactos["morada"]; ?></div>
            </div>

            <hr>
            <div class="col-12">
                <div class="subtitulo">e-mail</div>
                <div class="texto"><?= $contactos["mail"]; ?></div>
            </div>

            <hr>
            <div class="col-12">
                <div class="subtitulo">horário</div>
                <div class="texto"><?= $contactos["horario"]; ?></div>
            </div>

            <hr>
            <a href="<?= $url_backoffice. "contactos/editar"; ?>">
                <button class="botaoneutro">editar</button>
            </a>    
        </div>
    </div>
</main>