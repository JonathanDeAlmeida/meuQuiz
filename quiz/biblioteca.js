function verificar(){

    var imagem = document.getElementById("imagem").value
    var titulo = document.getElementById("titulo").value
    var descricao = document.getElementById("descricao").value

    var ok = true
    var mensagem = ""

    if (imagem == ''){
        ok = false
        mensagem = mensagem + "Digite um link para a imagem\n"
    }
    if (titulo == ''){
        ok = false
        mensagem = mensagem + "Digite um titulo\n"
    }
    if (descricao == ''){
        ok = false
        mensagem = mensagem + "Digite uma descrição\n"
    }
    if (ok){
        alert("Quiz cadastrado")
    }else{
        alert(mensagem)
    }
    event.returnValue = ok
}