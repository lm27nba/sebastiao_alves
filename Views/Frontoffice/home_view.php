<main class="pagina-total">

    <!-- "Caixa" da página HOME para boas vindas -->

    <div id="caixa_entrada_home">     
        <div class="container-fluid z-2 position-relative">
            <div class="row offset-0 offset-lg-1" id="caixa">
                
                <div id="esquerda" class="col-auto text-center pt-5 pt-md-0">
                    <img id="foto" src="<?= $autor["img_home"]; ?>" alt="FOTO-autor">
                </div>

                <!-- Tive de jogar com os tamanhos do ecrã para o texto que aparece para não desformatar! -->
                <div id="direita" class="col-11 col-md pe-lg-5">
                    <div class="bem-vindo-titulo T1">Bem vindo ao meu website</div>

                    <div class="d-block d-md-none d-lg-none d-xl-block bem-vindo-texto P0 pe-lg-5">
                        <?= substr($autor["texto_autor"], 0, 1200); ?>
                    </div>
                    <div class="d-none d-md-none d-lg-block d-xl-none bem-vindo-texto P0 pe-lg-5">
                        <?= substr($autor["texto_autor"], 0, 800); ?>
                    </div>
                    <div class="d-none d-md-block d-lg-none d-xl-none bem-vindo-texto P0 pe-lg-5">
                        <?= substr($autor["texto_autor"], 0, 500); ?>
                    </div>

                    <div class="bem-vindo-botao d-flex justify-content-center justify-content-md-end pe-lg-5">
                        <a class="links" href="<?= $url_base; ?>autor">
                            <button class="btnsabermais B0">Saber Mais</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Últimos Livros -->

    <div id="zona-conteudo mx-auto" class="container">
    
        <div id="texto-cont" class="row">
            <div class="col-12">

                <div class="titulo-conteudo T1">Últimos Livros</div>

                <div class=" col-12 mx-auto texto-conteudo P0"><?= $autor["texto_home"]; ?></div>
            </div>
        </div>

        <!-- Livros em Miniaturas -->

        <?php if(!empty($destaques)): ?>
            <div class="row">
                <div  id="destaques" class="col-12 d-flex flex-wrap justify-content-center justify-content-md-around">
                    <?php foreach($destaques as $key =>$dest): ?>
                        <?php $livro = retonarLivroEspecifico($dest["id_livros"]); ?>
                        
                        <div class="col-3 card">
                            <img src="<?= $livro["imagem"];?>" class="card-img-top" alt="destaque<?= $key; ?>">

                            <div class="card-body">
                                <h5 class="card-title T1Esp my-0"><?= $livro["titulo"];?></h5>
                                <h6 class="card-category SM0 my-0"><?= $dest["destaque"];?></h6>
                                <div class="card-text P0 my-0"><?= substr($livro["texto"], 0, 150);?>...</div>

                                <a href="<?= $url_base; ?>livros/<?= $dest["id_livros"];?>" 
                                class="d-flex justify-content-end text-decoration-none">
                                    <button class="btnsabermais card-button B0">saber mais</button>        
                                </a>
                            </div>
                        </div>  
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</main>