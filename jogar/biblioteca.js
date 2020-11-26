function verificarResposta(alternativa, quiz_id, usuario_id){
    $.ajax({
        type: 'POST',
        dataType: 'html',
        url: 'index.php',
        data: {alternativa: alternativa, quiz_id: quiz_id, usuario_id: usuario_id, acao: 'verificarResposta'},
        success: function (msg) {
        },
        error: function (msg) {
        }
    })
    if(alternativa === "1"){
        alert('certo');
    }else{
        alert('errado');
    }
    definirIdPergunta();
    alterarImagem(perguntaId1);
    alterarTexto(perguntaId1);
}

function definirIdPergunta(){
    return perguntaId1 += 1;
}

function alterarTexto(perguntaId1){
    if(perguntaId1 <= 2){
        document.getElementById('pergunta').innerHTML = quizJson.pergunta[perguntaId1].perguntaTitulo;
    for(var i = 0; i <= 3; i++){
        document.getElementById(i.toString()).innerHTML = quizJson.pergunta[perguntaId1].alternativa[contador].alternativaNome;
        contador++;
        if(contador > 3){
            contador = 0;
        }
    }
    } else{
        window.location.href = "/meuQuiz/resultado/exibicao.php"
    }
}
function alterarImagem(perguntaId1){
    if(perguntaId1 <= 2) {
        document.getElementById('imagem').src = quizJson.pergunta[perguntaId1].perguntaImagem;
    }
}
