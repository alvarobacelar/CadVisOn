

//jQuery(document).ready(function() {
//    jQuery("#data1").inputmask("d/m/y");  //direct mask
//    jQuery("#data2").inputmask("d/m/y");  //direct mask
//});
$(function() {
    $("#cpfVerifica").mask("999.999.999-99");
    $("#relData1").mask("99/99/9999");
    $("#relData2").mask("99/99/9999");
    $("#cpf").mask("999.999.999-99");
    $("#telefone").mask("(99) 9999-99999");
    $("#cep").mask("99.999-999");
});

// verificando o navegador
$(function() {
    if (jQuery.browser.mozilla) {
        $("#navegador").text("Utilize outro navegador para melhor funcionamento do sitema (Chrome ou Opera)");
    } else if (jQuery.browser.msie) {
        $("#navegador").text("Utilize outro navegador para melhor funcionamento do sitema (Chrome ou Opera)");
    } else if (jQuery.browser.safari) {
        $("#navegador").text("Utilize outro navegador para melhor funcionamento do sitema (Chrome ou Opera)");
    } else if (jQuery.browser.opera) {
        // Seu código aqui se for Opera  
    } else {

    }
});

jQuery.validator.addMethod("verificaCPF", function(value, element) {
    value = value.replace('.', '');
    value = value.replace('.', '');
    cpf = value.replace('-', '');
    while (cpf.length < 11)
        cpf = "0" + cpf;
    var expReg = /^0+$|^1+$|^2+$|^3+$|^4+$|^5+$|^6+$|^7+$|^8+$|^9+$/;
    var a = [];
    var b = new Number;
    var c = 11;
    for (i = 0; i < 11; i++) {
        a[i] = cpf.charAt(i);
        if (i < 9)
            b += (a[i] * --c);
    }
    if ((x = b % 11) < 2) {
        a[9] = 0
    } else {
        a[9] = 11 - x
    }
    b = 0;
    c = 11;
    for (y = 0; y < 10; y++)
        b += (a[y] * c--);
    if ((x = b % 11) < 2) {
        a[10] = 0;
    } else {
        a[10] = 11 - x;
    }
    if ((cpf.charAt(9) != a[9]) || (cpf.charAt(10) != a[10]) || cpf.match(expReg))
        return false;
    return true;
}, "Informe um CPF válido."); // Mensagem padrão

$(document).ready(function() {
    $("#verifica_vis").validate({
        rules: {
            cpfVerifica: {required: true, verificaCPF: true}
        },
        messages: {
            cpfVerifica: {required: "Digite seu cpf", verificaCPF: "CPF inválido"},
        },
    });
});





