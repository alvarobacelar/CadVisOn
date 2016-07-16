$(document).ready(function() { // iniciando a função jQuery
    $("#webcam").click(function() {
        $.ajax({
            url: "lib/photo_booth/index.html", // pagina que irá aparecer
            type: 'GET', // metodo de recebimento: GET ou POST 
            success: function(data) {
                $("#ajax").html(data);
            },
            error: function() { // se der erro mostrará uma mensagem
                alert("Erro!");
            },
            beforeSend: function() { // antes de mostrar a requisição mostra uma mensagem
                $("#ajax").html("Aguarde...");
            }
        });
    });
});