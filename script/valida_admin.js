

// faz verificacao das senhas
function verificaSenha(){

    var senha = document.cadastrar.senha.value;
    var senha2 = document.cadastrar.senha2.value;
    if(senha != senha2){   
        document.getElementById('erro-senha').innerHTML ="As senhas não correspondem";
        return false;
    } else 
    if(senha == senha2){
        document.getElementById('erro-senha').innerHTML = "";
        return true;
    }
   
}

// FUNCAO DE EXCLUSÃO DE USUARIO, COM ALERT DE CONFIRMAÇÃO
function excluirUsuario(id){

    var excluir = confirm("Deseja realmente excluir o usuario?");

    if (excluir){
        location.href="include/controlles/deleta_usuario.php?id="+id;
    }
}

// FUNCAO DE DESATIVAÇÃO DE USUARIO, COM ALERT DE CONFIRMAÇÃO
function desativarVisita(id){

    var excluir = confirm("DESEJA REALMENTE DESATIVAR A VISITA DE NUMERO "+id+"?");

    if (excluir){
        location.href="include/controlles/desativar_visita.php?id="+id;
    }
}

// FUNÇÃO DE EXCLUSÃO DE MILITAR
function excluiMilitar(id){

    var exclui = confirm("DESEJA REALMENTE EXCLUIR O MILITAR DE NUMERO "+id+"?");

    if (exclui){
        location.href="include/controlles/excluir_militar.php?id="+id;
    }
}

// FUNCAO QUE MARCA MENSAGE DE CONTATO COMO LIDA
function marcarLida(id){
    location.href="include/controlles/marcar_lida.php?idContato="+id;
}
