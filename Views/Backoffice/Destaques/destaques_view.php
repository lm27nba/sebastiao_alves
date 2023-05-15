<main class="container-fluid p-0">                         
    <div class="row m-0">                     
        <div class="col-10 caixa">                     
            
            <?php if($destaques <= 0): ?>

                <div class="mensagem_erro mx-auto">
                    Não existem livros a apresentar!
                </div>

            <?php else: ?>
                <table class=" mx-auto">
                    <tr class="primeira_linha">
                        <th class="coluna1">imagem</th>
                        <th class="coluna3">título</th>
                        <th class="coluna2">categoria</th>
                        <th class="coluna4">estado</th>
                        <th class="coluna5">acções</th>
                    </tr>

                    <?php foreach($destaques as $d): ?>
                        <?php $livro = retonarPartesLivroEspecifico($d["id_livros"]); ?>
                        <tr>

                            <td><img class="mini_banner" src="<?= $livro["imagem"];?>" alt="mini"></td>
                            <td><?= $livro["titulo"];?></td>
                            <td><?= $d["destaque"];?></td>  
                            <td><?= $d["estado"];?></td>                            
                            
                            <td class="td_especial">
                                <a class="link" 
                                href="<?= $url_backoffice. "destaques/editar/".$d["id"]; ?>">Editar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>    
                </table>
            <?php endif;?>  
        </div>                 
    </div>                          
</main> 