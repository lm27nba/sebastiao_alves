<main class="container-fluid p-0">                         
    <div class="row m-0">                     
        <div class="col-10 caixa">                     
             
            <?php if($total_elementos <= 0): ?>

                <div class="mensagem_erro mx-auto">
                    Não há nenhum banner guardado!
                </div>
        
            <?php else: ?>

                <form method="POST">
                    <select name="escolha">
                        <option value="desktop" checked>Desktop</option>
                        <option value="mobile">Mobile</option>
                    </select>
                </form>

                <table class=" mx-auto">
                    <tr class="primeira_linha">
                        <th class="coluna1">imagem</th>
                        <th class="coluna2">título</th>
                        <th class="coluna3">subtitulo</th>
                        <th class="coluna4">data publicação</th>
                        <th class="coluna5">acções</th>
                    </tr>

                    <?php foreach($carousel as $c): ?>
                        <tr>

                            <td>
                                <img class="mini_banner" alt="mini"
                                src="<?= ($mostrar == mobile) ? $c["img_mob"] : $c["img_desk"];?>">
                            </td>
                            <td><?= $c["titulo"];?></td>
                            <td><?= substr($c["texto"], 0, 100);?>...</td>
                            <td><?= $c["quando"];?></td>                              
                            
                            <td class="td_especial">
                                <a class="link" href="<?= $url_backoffice. "carousel/editar/". $c["id"]; ?>">Editar</a>
                                <br>
                                <a class="link" href="<?= $url_backoffice. "carousel/apagar/". $c["id"]; ?>">Apagar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>    
                </table>
                
                <div class="col-12 mx-auto mt-3">
                    <a class="link" 
                    href="<?= ($pag > 1) ? $url_backoffice. "carousel/ver/" .($pag-1) : $url_backoffice. "carousel/ver/1"; ?>">
                        <button class="botao2" name="pag" value="<?= ($pag > 1) ? ($pag-1) : 1; ?>"
                        <?= ($pag <= 1) ? "disabled" : ""; ?> style="display: <?= ($pag <= 1) ? "none" : ""; ?>;">
                            <<
                        </button>
                    </a>

                    <?php for($i=1; $i <= $pag_necessarias; $i++): ?>

                        <a class="link" href="<?= $url_backoffice. "carousel/ver/" .$i; ?>">
                            <button class="botao2" style="<?= ($i == $pag) ? "background-color:blue; color:white" : ""; ?>" 
                            name="pag" value="<?= $i; ?>">
                                <?= $i; ?>
                            </button>
                        </a>

                    <?php endfor; ?>
                    <a class="link" href="<?= ($pag < $pag_necessarias) ? $url_backoffice. "carousel/ver/" .($pag +1) : $url_backoffice. "carousel/ver/" .$pag_necessarias; ?>">
                        <button class="botao2" name="pag" value="<?= ($pag < $pag_necessarias) ? ($pag +1) : $pag_necessarias; ?>"
                        <?= ($pag >= $pag_necessarias) ? "disabled" : ""; ?> 
                        style="display: <?= ($pag >= $pag_necessarias) ? "none" : ""; ?>;">
                            >>
                        </button>
                    </a>
                </div>
                <hr>
            <?php endif; ?>

            <a class="link" href="<?= $url_backoffice. "carousel/adicionar"; ?>">
                <button class="botao3">Criar novo banner</button>
            </a>        
        </div>                 
    </div>                          
</main> 