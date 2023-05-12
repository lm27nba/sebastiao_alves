<main class="container">
    <div class="row">
        <div class="col-12 text-center mt-5">
            <div class="T1">404 - Pagina Não Encontrada.</div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 error_box mt-5">
             
            <div class="T0">
                Oooops...
            </div>

            <div class="T4 mt-4">
                A página que está a tentar solicitar não está no servidor. O erro pode ocorrer pelos seguintes motivos:
            </div>

            <div class="P1">
                <ul>
                    <li>Se escreveu o URL diretamente na barra (verifique se a ortografia está correta).</li>
                    <li>Se clicou num link para chegar até aqui. (possivelmente o link está desatualizado).</li>
                </ul>
            </div>

            <div class="T4">
                O que pode fazer? Sugiro que regresse à página inicial.
            </div>
            
            <div class="d-flex justify-content-center">
                <a class="link" href="<?= $url_backoffice; ?>">
                    <button class="btn_404 N0 mt-4">Página Inicial</button>
                </a>
            </div>

        </div>
    </div>
</main>