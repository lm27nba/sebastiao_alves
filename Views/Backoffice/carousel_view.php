<main class="container-fluid p-0">

    <!-- Primeiro vamos saber para que tipo de ecrã estamos trabalhar. -->
    <?php if(!$ecra): ?>
        <div class="row m-0">
            <div class="col-10 caixa d-flex flex-column justify-content-center align-items-center gap-1">
                
                <a class="link my-2" href="<?= $url_backoffice. "carousel/desktop"; ?>">
                    <button class="botao2">Desktop</button>
                </a>

                <a class="link my-2" href="<?= $url_backoffice. "carousel/mobile"; ?>">
                    <button class="botao2">Mobile</button>
                </a>
            </div>
        </div>

    <!-- Sabendo então o ecrã "troca" a página sem sair dela. -->
    <?php else: ?>

        <!-- Vamos trabalhar a parte do desktop então: -->
        <?php if($ecra == "desktop"): ?>

            <!-- Apresentar os dados que estão na base de dados caso os haja para que o utlizador escolha o que pretende. -->
            <?php if(!$accao): ?>
                <div class="row m-0">
                    <div class="col-10 caixa">

                        <!-- Mensagem de erro caso não haja dados.  -->
                        <?php if(empty($banner)): ?>

                            <div class="mensagem_erro"> Não existem dados guardados na base de dados!</div>

                        <!-- Apresentação dos dados na tabela. -->    
                        <?php else: ?>

                            <form method="POST">
                                <table>
                                    <tr>
                                        <th>imagem</th>
                                        <th>título</th>
                                        <th>subtítulo</th>
                                        <th>data atualização</th>
                                        <th>acções</th>
                                    </tr>

                                    <?php foreach($banner as $b): ?>
                                        <tr>
                                            <?php foreach($b as $key => $valor): ?>
                                                
                                                <td><img class="mini_banner" src="<?= $b["imagem"];?>" alt="mini"></td>
                                                <td><?= $valor;?></td>
                                                <td><?= $valor;?></td>
                                                <td><?= $valor;?></td>                              
                                            <?php endforeach; ?>
                                            
                                            <!-- Rotas para a edição e para apagar -->
                                            <td class="d-flex flex-column align-items-center justify-content-center">
                                                <a href="<?= $url_backoffice. "carousel/desktop/editar/". $b["id"]; ?>">Editar</a>
                                                <a href="<?= $url_backoffice. "carousel/desktop/apagar/". $b["id"]; ?>">Apagar</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>    
                                </table>
                            </form>                 
                        <?php endif; ?>

                        <!-- Rotas para a adicionar novo banner -->
                        <a class="link" href="<?= $url_backoffice. "carousel/desktop/adicionar"; ?>">
                            <button class="botao3">Criar novo banner</button>
                        </a>        
                    </div>
                </div>

            <!-- Então, sabendo o que se pretende fazer -->    
            <?php else: ?>
                <div class="row m-0">
                    <div class="col-10 caixa">

                        <!-- Adicionar -->
                        <?php if($accao == "adicionar"): ?>

                            <?php if($mensagem != "sucesso"): ?>

                                <div class="col-12 texto">
                                    <span class="subtitulo">Cabeçalho:</span> Adicionar uma nova imagem de Cabeçalho. 
                                </div>
                            
                                <form id="formulario" class="col-12 mx-auto" method="POST">
                                    
                                    <div class="col-10 d-flex justify-content-center gap-3 mx-auto">
                                        <div class="col-6 d-flex flex-column align-items-start">

                                            <div class="col-12">
                                                <label style="width: 97%" class="texto1" for="titulo">
                                                    <span class="subtitulo1">TITULO:</span> (Titulo de imagem do cabeçalho)*
                                                </label>
                                                <input style="width: 97%" class="input1" type="text" 
                                                name="titulo" required="required" 
                                                placeholder="Insira o título do livro" id="titulo">
                                            </div>

                                            <div class="col-12">
                                                <label style="width: 97%" class="texto1" for="ativo">
                                                    <span class="subtitulo1">ATIVO:</span> *
                                                </label>
                                                <select style="width: 97%" class="input1" id="ativo"
                                                name="ativo" required="required">
                                                    <option value="sim">Sim</option>
                                                    <option value="nao">Não</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-6 d-flex flex-column align-items-start">

                                            <div class="col-12">
                                                <label style="width: 97%" class="texto1" for="tag">
                                                    <span class="subtitulo1">TAG:</span> (Tag do cabeçalho)*
                                                </label>
                                                <input style="width: 97%" class="input1 w-98" type="text" name="tag" id="tag"
                                                required="required" value="Novidade">
                                            </div>

                                            <div class="col-12">
                                                <label style="width: 97%" class="texto1" for="posicao">
                                                    <span class="subtitulo1">POSIÇÃO:</span> (Posição na grelha)*
                                                </label>
                                                <select style="width: 97%" class="input1 w-98" id="posicao"
                                                name="posicao" required="required">
                                                    <?php for($i=1; $i<=($quantidade+1); $i++): ?>
                                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                                    <?php endfor; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-10 mx-auto">
                                        <label class="texto1 w-100" for="link">
                                            <span class="subtitulo1">SABER MAIS:</span> (Link para o botão do saber mais)*
                                        </label>
                                        <input class="input1" type="text" id="link" name="link" 
                                        placeholder="Insira um link valido">
                                    </div>

                                    <div class="col-10 mx-auto">
                                        <label class="texto1 w-100" for="texto">
                                            <span class="subtitulo1">TEXTO:</span> (Texto para o cabeçalho)*
                                        </label>
                                        <textarea name="texto" id="texto" cols="121" rows="6" 
                                        placeholder="Insira um breve texto"></textarea>
                                    </div>

                                    <div class="col-10 mx-auto">
                                        <label class="texto1 w-100" for="desktop_img">
                                            <span class="subtitulo1">IMAGEM DESKTOP:</span>*
                                        </label>
                                        <input class="input1" type="text" id="desktop_img" name="desktop_img" 
                                        require="require" placeholder="Insira o link da imagem através do gestor de ficheiros">
                                    </div>

                                    <div class="col-10 mx-auto">
                                        <label class="texto1 w-100" for="mobile_img">
                                            <span class="subtitulo1">IMAGEM MOBILE:</span>*
                                        </label>
                                        <input class="input1" type="text" id="mobile_img" name="mobile_img" 
                                        require="require" placeholder="Insira o link da imagem através do gestor de ficheiros">
                                    </div>
                                </form>
                                
                                <a target="_blank" class="link" href="<?= $url_base; ?>FileManager/tinyfilemanager.php">
                                    <button class="botao_form">
                                        Gestor Ficheiros
                                    </button>
                                </a>  

                                <a class="link" href="<?= $url_backoffice; ?>carousel/desktop">
                                    <button class="botaonok">
                                        Cancelar
                                    </button>
                                </a>  
                                
                                <input class="botaook" for="formulario" type="submit" value="Guardar">

                            <!-- Mensagem a informar o fim da operação -->   
                            <?php else: ?>

                                <div class="mensagem_sucesso">Banner criado com sucesso!</div>

                                <a href="<?= $url_backoffice; ?>carousel/desktop">
                                    <button class="botao">Voltar</button>
                                </a>
                            <?php endif; ?>

                        <!-- Editar -->
                        <?php elseif($accao == "editar" && !empty($banner)): ?>

                            <?php if($mensagem != "sucesso"): ?>

                            <div class="col-12 texto">
                                <span class="subtitulo">Cabeçalho:</span> Editar uma imagem do Cabeçalho. 
                            </div>

                            <form id="formulario" class="col-12 mx-auto" method="POST">
                                
                                <div class="col-10 d-flex justify-content-center gap-3 mx-auto">
                                    <div class="col-6 d-flex flex-column align-items-start">

                                        <div class="col-12">
                                            <label style="width: 97%" class="texto1" for="titulo">
                                                <span class="subtitulo1">TITULO:</span> (Titulo de imagem do cabeçalho)*
                                            </label>
                                            <input style="width: 97%" class="input1" type="text" 
                                            name="titulo" required="required" id="titulo"
                                            value="<?= $banner[titulo]; ?>">
                                        </div>

                                        <div class="col-12">
                                            <label style="width: 97%" class="texto1" for="ativo">
                                                <span class="subtitulo1">ATIVO:</span> *
                                            </label>
                                            <select style="width: 97%" class="input1" id="ativo" name="ativo" required="required">
                                                <option value="<?= ($banner["ativo"]=="sim") ? "sim" : "nao"; ?>">
                                                    <?= ($banner["ativo"]=="sim") ? "Sim" : "Não"; ?>
                                                </option>
                                                <option value="<?= ($banner["ativo"]=="sim") ? "nao" : "sim"; ?>">
                                                    <?= ($banner["ativo"]=="sim") ? "Não" : "Sim"; ?>
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-6 d-flex flex-column align-items-start">

                                        <div class="col-12">
                                            <label style="width: 97%" class="texto1" for="tag">
                                                <span class="subtitulo1">TAG:</span> (Tag do cabeçalho)*
                                            </label>
                                            <input style="width: 97%" class="input1 w-98" type="text" name="tag" id="tag"
                                            required="required" value="<?= $banner["tag"]; ?>">
                                        </div>

                                        <div class="col-12">
                                            <label style="width: 97%" class="texto1" for="posicao">
                                                <span class="subtitulo1">POSIÇÃO:</span> (Posição na grelha)*
                                            </label>
                                            <select style="width: 97%" class="input1 w-98" id="posicao"
                                            name="posicao" required="required">
                                                <?php for($i=1; $i<=($quantidade+1); $i++): ?>
                                                    <option value="<?= $banner["posicao"]; ?>"><?= $banner["posicao"]; ?></option>
                                                <?php endfor; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-10 mx-auto">
                                    <label class="texto1 w-100" for="link">
                                        <span class="subtitulo1">SABER MAIS:</span> (Link para o botão do saber mais)*
                                    </label>
                                    <input class="input1" type="text" id="link" name="link" 
                                    value="<?= $banner["sabermais"]; ?>">
                                </div>

                                <div class="col-10 mx-auto">
                                    <label class="texto1 w-100" for="texto">
                                        <span class="subtitulo1">TEXTO:</span> (Texto para o cabeçalho)*
                                    </label>
                                    <textarea name="texto" id="texto" cols="121" rows="6" 
                                    value="<?= $banner["texto"]; ?>"></textarea>
                                </div>

                                <div class="col-10 mx-auto">
                                    <label class="texto1 w-100" for="desktop_img">
                                        <span class="subtitulo1">IMAGEM DESKTOP:</span>*
                                    </label>
                                    <input class="input1" type="text" id="desktop_img" name="desktop_img" 
                                    require="require" value="<?= $banner["desktop_img"]; ?>">>
                                </div>

                                <div class="col-10 mx-auto">
                                    <label class="texto1 w-100" for="mobile_img">
                                        <span class="subtitulo1">IMAGEM MOBILE:</span>*
                                    </label>
                                    <input class="input1" type="text" id="mobile_img" name="mobile_img" 
                                    require="require" value="<?= $banner["mobile_img"]; ?>">
                                </div>
                            </form>

                            <a target="_blank" class="link" href="<?= $url_base; ?>FileManager/tinyfilemanager.php">
                                <button class="botao_form">
                                    Gestor Ficheiros
                                </button>
                            </a>  

                            <a class="link" href="<?= $url_backoffice; ?>carousel/desktop">
                                <button class="botaonok">
                                    Cancelar
                                </button>
                            </a>  

                            <input class="botaook" for="formulario" type="submit" value="Guardar">

                            <!-- Mensagem a informar o fim da operação -->   
                            <?php else: ?>

                                <div class="mensagem_sucesso">Banner editado com sucesso!</div>

                                <a href="<?= $url_backoffice; ?>carousel/desktop">
                                    <button class="botao">Voltar</button>
                                </a>
                            <?php endif; ?>

                        <?php elseif($accao == "apagar" && !empty($banner)): ?>

                            <?php if($mensagem != "sucesso"): ?>

                                <div class="subtitulo">
                                    Pretende mesmo apagar o Banner (<?= $titulo; ?>)?
                                </div>

                                <div class="imagem">
                                    <img src="<?= $imagem; ?>" alt="banner a apagar">
                                </div>

                                <a class="link" href="<?= $url_backoffice; ?>carousel/desktop/apagar/confirma">
                                    <button class="botaonok">
                                        Apagar
                                    </button>
                                </a> 
                                
                                <a class="link" href="<?= $url_backoffice; ?>carousel/desktop">
                                    <button class="botaonok">
                                        Cancelar
                                    </button>

                                </a>  
                                
                            <?php else: ?>

                                <div class="mensagem_sucesso">Banner editado com sucesso!</div>

                                <a href="<?= $url_backoffice; ?>carousel/desktop">
                                    <button class="botao">Voltar</button>
                                </a>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>
</main>