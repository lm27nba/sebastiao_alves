
// Fazer compasso de espera antes de executar o scroll automático nas diversas páginas:
setTimeout(scrollInicial, 400);




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




