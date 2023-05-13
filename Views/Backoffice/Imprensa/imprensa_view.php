<main class="container-fluid p-0">                         
    <div class="row m-0">                     
        <div class="col-10 caixa">                     
             
            <?php if($total_elementos <= 0): ?>

                <div class="mensagem_erro mx-auto">
                    Não existem publicações a apresentar!
                </div>
        
            <?php else: ?>
                <table class=" mx-auto">
                    <tr class="primeira_linha">
                        <th class="coluna1">imagem</th>
                        <th class="coluna2">título</th>
                        <th class="coluna3">texto</th>
                        <th class="coluna4">data publicação</th>
                        <th class="coluna5">acções</th>
                    </tr>

                    <?php foreach($imprensa as $i): ?>
                        <tr>

                            <td><img class="mini_banner" src="<?= $i["imagem"];?>" alt="mini"></td>
                            <td><?= $i["titulo"];?></td>
                            <td><?= substr($i["texto"], 0, 100);?>...</td>
                            <td><?= $i["quando"];?></td>                              
                            
                            <td class="td_especial">
                                <a class="link" href="<?= $url_backoffice. "imprensa/editar/". $i["id"]; ?>">Editar</a>
                                <br>
                                <a class="link" href="<?= $url_backoffice. "imprensa/apagar/". $i["id"]; ?>">Apagar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>    
                </table>
                
                <div class="col-12 mx-auto mt-3">
                    <a class="link" 
                    href="<?= ($pag > 1) ? $url_backoffice. "imprensa/ver/" .($pag-1) : $url_backoffice. "imprensa/ver/1"; ?>">
                        <button class="botao2" name="pag" value="<?= ($pag > 1) ? ($pag-1) : 1; ?>"
                        <?= ($pag <= 1) ? "disabled" : ""; ?> style="display: <?= ($pag <= 1) ? "none" : ""; ?>;">
                            <<
                        </button>
                    </a>

                    <?php for($i=1; $i <= $pag_necessarias; $i++): ?>

                        <a class="link" href="<?= $url_backoffice. "imprensa/ver/" .$i; ?>">
                            <button class="botao2" style="<?= ($i == $pag) ? "background-color:blue; color:white" : ""; ?>" 
                            name="pag" value="<?= $i; ?>">
                                <?= $i; ?>
                            </button>
                        </a>

                    <?php endfor; ?>
                    <a class="link" href="<?= ($pag < $pag_necessarias) ? $url_backoffice. "imprensa/ver/" .($pag +1) : $url_backoffice. "imprensa/ver/" .$pag_necessarias; ?>">
                        <button class="botao2" name="pag" value="<?= ($pag < $pag_necessarias) ? ($pag +1) : $pag_necessarias; ?>"
                        <?= ($pag >= $pag_necessarias) ? "disabled" : ""; ?> 
                        style="display: <?= ($pag >= $pag_necessarias) ? "none" : ""; ?>;">
                            >>
                        </button>
                    </a>
                </div>
                <hr>
            <?php endif; ?>

            <a class="link" href="<?= $url_backoffice. "imprensa/adicionar"; ?>">
                <button class="botao3">Criar nova postagem</button>
            </a>        
        </div>                 
    </div>                          
</main> 