<main class="pagina-total">

    <!-- "Caixa" da página IMPRENSA -->

    <div id="caixa_entrada">     
        <div class="container-fluid p-0 z-2 position-relative">
            <div class="row offset-0 offset-md-1 p-0" id="caixa_autor">
                
                <div class="col-10 mx-auto nome_livros M1 p-0">
                    Imprensa
                </div>

                <div class="col-10 mx-auto subtitulo_livros T1 p-0">
                    Últimas Notícias
                </div>
            </div>
        </div>
    </div>

    <!-- Area especifica do conteudo do site -->

    <div class="area-texto">     
        <div class="container-fluid m-0 p-0">

            <?php $x=1; ?>
            <?php foreach($imprensa as $i): ?>
                
                <div class="row mx-0 p-0">                   
                    <div class="col-12 px-0 <?= ($x==1) ? "area_imprensa" : ""; ?> mx-auto">
                        
                        <div class="col-12 col-md-10 px-md-3 mx-auto noticia<?= $x; ?>">
                            <div class="col-10 mx-auto titulo-imprensa T1">
                                <?= $i["titulo"]; ?>
                            </div>

                            <div class="col-10 mx-auto separador-noticias"></div>

                            <div class="col-10 mx-auto P2 text-end">
                                <?= $i["quando"]; ?>
                            </div>

                            <div class="col-10 mx-auto mt-5">
                                <img style="width:100%" src="<?= $i["imagem"]; ?>" alt="imprensa">
                            </div>

                            <div class="texto-noticia col-10 mx-auto mt-5">
                                <?= $i["texto"]; ?>
                            </div>

                        </div>          
                    </div>
                </div>
                <?php ($x != 2) ? $x++ : $x=1; ?>
            <?php endforeach; ?>


            <div class="row p-0 m-0">

                <div class="col-12 mx-auto p-0">
                    <div class="paginacao text-center d-flex align-items-center justify-content-center">

                        <a class="link" 
                        href="<?= ($pag > 1) ? $url_base. "imprensa/" .($pag-1) : $url_base. "imprensa/1"; ?>">
                            <button class="p-0 btn-paginacao me-2" name="pag" value="<?= ($pag > 1) ? ($pag-1) : 1; ?>"
                            <?= ($pag <= 1) ? "disabled" : ""; ?> style="display: <?= ($pag <= 1) ? "none" : ""; ?>;">
                                <img src="<?= $url_base;?>Public/Imagens/Utilitarios/setaesquerda1.svg" alt="anterior">
                            </button>
                        </a>

                        <div class="paginas d-flex justify-content-center gap-3">
                            <?php for($i=1; $i <= $pag_necessarias; $i++): ?>

                                <a class="link" href="<?= $url_base. "imprensa/" .$i; ?>">
                                    <button class="btn-paginacao Pag1 <?= ($i != $pag) ? "" : "active"; ?>" name="pag" 
                                    value="<?= $i; ?>">
                                        <?= $i; ?>
                                    </button>
                                </a>

                            <?php endfor; ?>
                        </div>

                        <a class="link" href="<?= ($pag < $pag_necessarias) ? $url_base. "imprensa/" .($pag +1) : $url_base. "imprensa/" .$pag_necessarias; ?>">
                            <button class="p-0 btn-paginacao ms-2" name="pag" style="display: <?= ($pag >= $pag_necessarias) ? "none" : ""; ?>;" 
                            value="<?= ($pag < $pag_necessarias) ? ($pag +1) : $pag_necessarias; ?>" <?= ($pag >= $pag_necessarias) ? "disabled" : ""; ?>>
                                <img src="<?= $url_base;?>Public/Imagens/Utilitarios/setadireita1.svg" alt="anterior">
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>