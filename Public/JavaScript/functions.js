
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