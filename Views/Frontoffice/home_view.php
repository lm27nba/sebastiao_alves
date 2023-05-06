<main class="pagina-total">

    <!-- "Caixa" da página HOME para boas vindas -->

    <div class="caixa_entrada">     
        <div class="container-fluid z-2 position-relative">
            <div class="row offset-0 offset-lg-1" id="caixa">
                
                <div id="esquerda" class="col-auto text-center pt-5 pt-md-0">
                    <img id="foto" src="<?= $url_base;?>Uploads/Desktop/FOTO-editada.jpg" alt="FOTO-autor">
                </div>

                <div id="direita" class="col-11 col-md pe-lg-5">
                    <div class="bem-vindo-titulo T1">
                        Bem vindo ao meu website
                    </div>

                    <div class="bem-vindo-texto P0 pe-lg-5">
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore reiciendis pariatur mollitia 
                            voluptate nulla, architecto perspiciatis similique nobis velit! Ducimus reiciendis aperiam facere. 
                            Et laboriosam sint quasi harum aliquam tempore fugiat. Nesciunt velit, modi non a tempore quas at 
                            neque suscipit fugit vero explicabo quo maiores aperiam dolorum porro quis amet veniam dicta 
                            odio repellat ex. Nesciunt recusandae dignissimos similique explicabo dolorum autem vitae fuga 
                            alias aspernatur? Ipsum ipsam eaque, sunt ipsa excepturi ad animi sed itaque architecto deserunt?
                            Eligendi quam, delectus maxime sed eveniet magni aspernatur non qui similique cum laborum nulla 
                            earum necessitatibus quidem nisi consequuntur repellat voluptatum neque quos minima. Voluptates 
                            consectetur hic voluptatibus amet assumenda pariatur, quae officia veniam? Hic consequatur nulla 
                            debitis id rerum unde illum velit, nihil quisquam vel. Tempore, corrupti a rem hic, cumque 
                            eos possimus asperiores facilis aliquam voluptas neque dolore, dolorum rerum enim error dignissimos 
                            quidem officiis quia ipsam quam natus voluptatum vitae? Sint eligendi inventore unde hic, 
                            fugit autem.
                        </p>
                    </div>

                    <div class="bem-vindo-botao d-flex justify-content-center justify-content-md-end">
                        <button class="btnsabermais B0 me-md-5">saber mais</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Resto do main - Últimos Livros, texto e cartas -->

    <div id="zona-conteudo mx-auto" class="container">
    
        <div id="texto-cont" class="row">
            <div class="col-12">

                <div class="titulo-conteudo T1">Últimos Livros</div>

                <p class=" col-12 mx-auto texto-conteudo P0">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo explicabo repellat, dolorem excepturi 
                    aspernatur harum assumenda nemo maxime iure nostrum molestiae ut incidunt, consequatur, impedit temporibus 
                    quisquam fugit natus facilis alias laudantium aperiam placeat? Tempore veritatis, deleniti reprehenderit 
                    deserunt fugiat ad in sint aut aspernatur, natus dolor ipsam temporibus atque alias quas possimus eum unde 
                    nam labore quasi! Quia voluptas temporibus sapiente, aut culpa quisquam nobis odio quasi doloribus ducimus 
                    labore ea minima voluptatum, ad fugit sit distinctio! Quidem architecto praesentium perspiciatis, 
                    voluptatibus debitis tempora deleniti quis rem obcaecati reiciendis at, voluptatum harum cum quod et 
                    reprehenderit veritatis repudiandae illo qui assumenda. Natus temporibus dolores quaerat corporis labore? 
                    Voluptatibus debitis dolore quo dolores, sed cupiditate repudiandae, sunt perferendis quos adipisci optio 
                    voluptatem animi quod. Blanditiis doloremque reprehenderit ducimus consequatur. Dolor, quidem. Iure, nisi 
                    facilis eligendi suscipit temporibus maiores consectetur soluta ipsam quam maxime ullam atque consequuntur, 
                    perferendis ipsa aperiam dolores?
                </p>
            </div>
        </div>

        <!-- Livros em Miniaturas -->

        <div class="row">
            <div  id="destaques" class="col-12 d-flex flex-wrap justify-content-center justify-content-md-around">
                
                <div class="col-3 card">
                    <img src="<?= $url_base;?>Uploads/Desktop/livro1.jpg" class="card-img-top" alt="livro1">

                    <div class="card-body">
                        <h5 class="card-title T1Esp my-0">senhora do amor e da guerra</h5>
                        <h6 class="card-category SM0 my-0">novidade</h6>
                        <div class="card-text P0 my-0">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae quidem quisquam, modi repellendus 
                            id, maxime suscipit maiores eligendi animi dignissimos cupiditate aut nulla alias praesentium 
                            ea! Dolorum doloremque quo reprehenderit.
                        </div>

                        <a href="#" class="d-flex justify-content-end text-decoration-none">
                            <button class="btnsabermais card-button B0">saber mais</button>        
                        </a>
                    </div>
                </div>

                <div class="col-3 card">
                    <img src="<?= $url_base;?>Uploads/Desktop/livro2.jpg" class="card-img-top" alt="livro2">

                    <div class="card-body">
                        <h5 class="card-title T1Esp my-0">o velho que pensava que fugia</h5>
                        <h6 class="card-category SM0 my-0">mais vendido</h6>
                        <p class="card-text P0 my-0">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae quidem quisquam, modi repellendus 
                            id, maxime suscipit maiores eligendi animi dignissimos cupiditate aut nulla alias praesentium 
                            ea! Dolorum doloremque quo reprehenderit.
                        </p>

                        <a href="#" class="d-flex justify-content-end text-decoration-none">
                            <button class="btnsabermais card-button B0">saber mais</button>        
                        </a>
                    </div>
                </div>
                
                <div class="col-3 card">
                    <img src="<?= $url_base;?>Uploads/Desktop/livro3.jpg" class="card-img-top" alt="livro3">

                    <div class="card-body">
                        <h5 class="card-title T1Esp my-0">coleccionador de amnésias</h5>
                        <h6 class="card-category SM0 my-0">em promoção</h6>
                        <p class="card-text P0 my-0">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae quidem quisquam, modi repellendus 
                            id, maxime suscipit maiores eligendi animi dignissimos cupiditate aut nulla alias praesentium 
                            ea! Dolorum doloremque quo reprehenderit.
                        </p>

                        <a href="#" class="d-flex justify-content-end text-decoration-none">
                            <button class="btnsabermais card-button B0">saber mais</button>        
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>