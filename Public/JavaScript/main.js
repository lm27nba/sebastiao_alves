
// Fazer compasso de espera antes de executar o scroll automático nas diversas páginas:
setTimeout(scrollInicial, 400);


// Garantir que a função scroll inicial é sempre recarregada. Não estava a funcionar quando vinha de window.history.back()!
window.onpageshow = function(event) {
    if (event.persisted) {
        setTimeout(scrollInicial, 400);

    }
};