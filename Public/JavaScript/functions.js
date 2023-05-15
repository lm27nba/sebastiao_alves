
// Função para limitar a introdução de caracteres em determinados sitios:
function textCounter(field, countfield, maxlimit){

    if(field.value.length > maxlimit){
        field.value = field.value.substring(0, maxlimit);
    }
    else{
        countfield.value = maxlimit - field.value.length;
    }
}

// Funções para fazer scroll e abrir os livros no header - Aguarda um tempo (1s) antes de executar a outra função:
function aguarde(){ setTimeout(livroFooter, 1000); }

// Função para abrir o dropdown:
function livroFooter(){ $("#livro_footer").dropdown("toggle"); }

// Função para andar para trás no histórico:
function voltar_atras(){ window.history.back(); }

// Função para fazer o scroll:
function scrollInicial(){

    let scroll_inicial = document.getElementById("caixa_entrada");
    
    scroll_inicial.scrollIntoView();
}

// Função para ver mais na página autor:
function mostrar_conteudo(){
    
    let div = document.getElementById("autor_abreviado");
    let div_nova = document.getElementById("autor_completo");
    let botao = document.getElementById("btnvermais");

    div.style.display = "none";
    div_nova.style.display = "block";
    botao.style.display = "none";
}