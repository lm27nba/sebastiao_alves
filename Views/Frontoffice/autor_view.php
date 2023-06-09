<main class="pagina-total">

    <!-- "Caixa" da página AUTOR -->

    <div id="caixa_entrada">     
        <div class="container-fluid p-0 z-2 position-relative">
            <div class="row offset-0 offset-md-1 p-0" id="caixa_autor">
                
                <div class="col-10 mx-auto nome_autor M1 p-0">
                    Autor
                </div>

                <div class="col-10 mx-auto subtitulo_autor T1 p-0">
                    Sobre mim
                </div>
            </div>
        </div>
    </div>

        <!-- Area especifica do conteudo do site -->

    <div class="area-texto">     
        <div class="container p-0">
            <div class="row mx-0">
                
                <div class="col-10 px-0 imagem_autor mx-auto text-center">
                    <img id="foto-autor" src="<?= $autor["img_autor"];?>" alt="autor">
                </div>

                <div style="display: block;" class="col-10 px-0 mx-auto P0 texto_autor" id="autor_abreviado">
                    <?= substr($autor["texto_autor"],0,3000);?>...
                </div>

                <div style="display: none;" class="col-10 px-0 mx-auto P0 texto_autor" id="autor_completo">
                    <?= $autor["texto_autor"];?>
                </div>

                <div class="col-10 px-0 py-0 mx-auto voltar-atras-botao d-flex flex-column align-items-center
                 align-items-md-start text-center">
                    <a class="links d-block d-md-none">
                        <button style="display:block;" id="btnvermais" class="vermais B0 btnvoltar" 
                        onmouseover="mostrar_conteudo()">
                            Ver Mais
                        </button>
                    </a>

                    <a class="links">
                        <button class="btnsabermais B0 btnvoltar" id="vlt_atras_autor" onclick="voltar_atras()">
                            Voltar Atrás
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>