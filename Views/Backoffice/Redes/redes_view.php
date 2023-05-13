<main class="container-fluid p-0">
    <div class="row m-0">
        <div class="col-10 caixa">

            <div class="col-12">
                <div class="subtitulo">instagram</div>
                <div class="texto"><?= $redes["instagram"]; ?></div>
            </div>

            <hr>
            <div class="col-12">
                <div class="subtitulo">facebook</div>
                <div class="texto"><?= $redes["facebook"]; ?></div>
            </div>

            <hr>
            <div class="col-12">
                <div class="subtitulo">linkedin</div>
                <div class="texto"><?= $redes["linkedin"]; ?></div>
            </div>

            <hr>
            <a href="<?= $url_backoffice. "redes/editar"; ?>">
                <button class="botaoneutro">editar</button>
            </a>    
        </div>
    </div>
</main>