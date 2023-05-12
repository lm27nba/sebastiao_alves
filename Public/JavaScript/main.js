
// Fazer compasso de espera antes de executar o scroll automático nas diversas páginas:
setTimeout(scrollInicial, 400);

// Função para fazer o scroll:
function scrollInicial(){
    let scroll_inicial = document.getElementById("caixa_entrada");
    scroll_inicial.scrollIntoView();
}


function trocarBotaoNav(){

    let imagem = document.getElementById("btn_nav_img");

    let img_menu = "<?= $url_base;?>Public/Imagens/Utilitarios/menu.svg";
    let img_fechar = "<?= $url_base;?>Public/Imagens/Utilitarios/fechar.svg>";

    if(imagem.src == img_menu){
        imagem.src = img_fechar;
    }

    else{
        imagem.src = img_menu;
    }
}




