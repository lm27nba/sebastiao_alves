
// Fazer o scroll para a caixa a meio da página nas páginas secundárias:
let scroll_inicial = document.getElementById("caixa_entrada");
scroll_inicial.scrollIntoView();


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




