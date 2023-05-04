<main class="container-fluid p-0">

    <?php if(!$ecra): ?>
        <div class="row m-0">
            <div class="col-10 caixa d-flex flex-column justify-content-center align-items-center gap-1">
                
                <a class="link my-2" href="<?= $url_base. "backoffice/carousel/desktop"; ?>">
                    <button class="botao2">Desktop</button>
                </a>

                <a class="link my-2" href="<?= $url_base. "backoffice/carousel/mobile"; ?>">
                    <button class="botao2">Mobile</button>
                </a>

            </div>
        </div>

    <?php else: ?>
        <?php if($ecra == "desktop"): ?>

            <?php if(!$accao): ?>




            <?php else: ?>
                
                


            <?php endif; ?>

        <?php endif; ?>
    <?php endif; ?>
</main>