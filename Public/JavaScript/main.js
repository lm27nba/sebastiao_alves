
// Fazer compasso de espera antes de executar o scroll automático nas diversas páginas:
setTimeout(scrollInicial, 400);

// Função para trocar os botões na NAV-BAR:
function trocarBotaoNav(){

    let menu = document.getElementById("btn_nav_menu");
    let fechar = document.getElementById("btn_nav_fechar");

    if(menu.style.display === "block"){
        menu.style.display = "none";
        fechar.style.display = "block";
    }

    else{
        fechar.style.display = "none";
        menu.style.display = "block";
    }
}

// Função para efeito hover das setas de paginação:

// Hover na seta da esquerda:
function trocarseta(){
    let seta = document.getElementById("setaesq");
    let seta1 = document.getElementById("setaesq1");

    seta.style.display = "none";
    seta1.style.display = "block";
}

// Regressar ao normal na seta da esquerda:
function voltarseta(){
    let seta = document.getElementById("setaesq");
    let seta1 = document.getElementById("setaesq1");

    seta.style.display = "block";
    seta1.style.display = "none";
}

// Hover na seta da direita:
function trocarseta1(){
    let seta = document.getElementById("setadir");
    let seta1 = document.getElementById("setadir1");

    seta.style.display = "none";
    seta1.style.display = "block";
}

// Regressar ao normal na seta da direita:
function voltarseta1(){
    let seta = document.getElementById("setadir");
    let seta1 = document.getElementById("setadir1");

    seta.style.display = "block";
    seta1.style.display = "none";
}