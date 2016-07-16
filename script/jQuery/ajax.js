$(document).ready(function() { // iniciando a função jQuery
    $("#cadastraCliente").click(function() {
        $.ajax({
            url: "cadastraVisitado.php", // pagina que irá aparecer
            type: 'POST', // metodo de recebimento: GET ou POST 
            success: function(data) {
                $("#floater").html(data);
            },
            error: function() { // se der erro mostrará uma mensagem
                alert("Erro!");
            },
            beforeSend: function() { // antes de mostrar a requisição mostra uma mensagem
                $("#floater").html("Aguarde...");
            }
        });
    });

//            // modifica o nome do atributo (classe, name, id...)
//            $("#testeBotao").bind("click",function(){ 
//                $("#ajax").attr("class","outro"); 
//            });

//                $("#testeBotao").unbind("click"); 
    

});

//function esconde() {
//    if (document.getElementById("floater").style.display == "block") {
//        document.getElementById("floater").style.display = "none";
//    }
//}

//function mostra() {
//    if (document.getElementById("floater").style.display == "none") {
//        document.getElementById("floater").style.display = "block";
//        timer = setTimeout("esconde()", 60000)
//    }
//    document.getElementById("fecharbanner").style.display = "block"
//}
//setTimeout("mostra()", 4000); 