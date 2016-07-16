
//VERIFICAÇÃO DO FORMULARIO
function enviardados() {
    var qnt;

    if (document.dados.nome.value == "") {
        document.getElementById('destino').innerHTML = "Preencha o campo o NOME";
        document.dados.nome.focus();
        return false;
    }

    if (document.dados.rg.value == "") {
        document.getElementById('destino').innerHTML = "Coloque o RG";
        document.dados.rg.focus();
        return false;
    }

    if (document.dados.sexo.value == "") {
        document.getElementById('destino').innerHTML = "escolha o SEXO";
        document.dados.sexo.focus();
        return false;
    }

    if (document.dados.cpf.value == "") {
        document.getElementById('destino').innerHTML = "Coloque o CPF";
        document.dados.cpf.focus();
        return false;
    }

    if (document.dados.cidade.value == "") {
        document.getElementById('destino').innerHTML = "Preencha o campo CIDADE";
        document.dados.cidade.focus();
        return false;
    }

    if (document.dados.uf.value == "") {
        document.getElementById('destino').innerHTML = "Escolha o estado";
        document.dados.uf.focus();
        return false;
    }

    if (document.dados.data.value == "") {
        document.getElementById('destino').innerHTML = "Preencha o campo DATA";
        document.dados.data.focus();
        return false;
    }

    if (document.dados.hora.value == "") {
        document.getElementById('destino').innerHTML = "Preencha o campo HORA";
        document.dados.hora.focus();
        return false;
    }

    if (document.dados.visitar.value == "") {
        document.getElementById('destino').innerHTML = "preencha o campo QUEM VEIO VISITAR";
        document.dados.visitar.focus();
        return false;
    }

    if (document.dados.telefone.value == "") {
        document.getElementById('destino').innerHTML = "preencha o campo TELEFONE";
        document.dados.telefone.focus();
        return false;
    }

    /*
     if (document.dados.endereco.value==""){
     document.getElementById('destino').innerHTML = "preencha o campo ENDEREÇO";
     document.dados.endereco.focus();
     return false;
     }
     
     if (document.dados.bairro.value==""){
     document.getElementById('destino').innerHTML = "coloque o seu BAIRRO";
     document.dados.bairro.focus();
     return false;
     }
     
     if (document.dados.numero.value==""){
     document.getElementById('destino').innerHTML = "coloque o NUMERO";
     document.dados.numero.focus();
     return false;
     }
     
     if( document.dados.email.value=="" && document.dado.email.value.indexOf('@')==-1 && document.dados.email.value.indexOf('.')==-1 ){
     document.getElementById("destino").innerHTML = "Preencha campo E-MAIL corretamente!";
     document.dados.email.focus();
     return false;
     }
     */

    document.getElementById("destino").innerHTML = "";
    return true;
}
//FIM DA VERIFICAÇÃO DO FORMULARIO

function cadastrar(obj) {
    if (obj == 1) {
        document.getElementById('destino2').innerHTML = obj + " Visitante Cadastrado";
    } else if (obj > 1) {
        document.getElementById('destino2').innerHTML = obj + "Visitantes Cadastrados";
    } else {
        document.getElementById('destino2').innerHTML = "Nenhum visitante cadastrado";

    }
}


//FORMANTANDO A DATA
function mascara_data(data) {
    var mydata = '';
    mydata = mydata + data;
    if (mydata.length == 2) {
        mydata = mydata + '/';
        document.dados.data.value = mydata;
    }
    if (mydata.length == 5) {
        mydata = mydata + '/';
        document.dados.data.value = mydata;
    }
    if (mydata.length == 10) {
        verifica_data();
    }
}

//verificando a data
function verifica_data() {

    dia = (document.dados.data.value.substring(0, 2));
    mes = (document.dados.data.value.substring(3, 5));
    ano = (document.dados.data.value.substring(6, 10));

    situacao = "";
    // verifica o dia valido para cada mes
    if ((dia < 01) || (dia < 01 || dia > 30) && (mes == 04 || mes == 06 || mes == 09 || mes == 11) || dia > 31) {
        situacao = "falsa";
    }

    // verifica se o mes e valido
    if (mes < 01 || mes > 12) {
        situacao = "falsa";
    }

    // verifica se e ano bissexto
    if (mes == 2 && (dia < 01 || dia > 29 || (dia > 28 && (parseInt(ano / 4) != ano / 4)))) {
        situacao = "falsa";
    }

    if (document.dados.data.value == "") {
        situacao = "falsa";
    }

    if (situacao == "falsa") {
        document.getElementById('destino').innerHTML = "Data inválida";
        document.dados.data.focus();
    }
}

//FORMATANDO A HORA
function mascara_hora(hora) {
    var myhora = '';
    myhora = myhora + hora;
    if (myhora.length == 2) {
        myhora = myhora + ':';
        document.dados.hora.value = myhora;
    }
    if (myhora.length == 5) {
        verifica_hora();
    }
}

//VERIFICANDO A HORA
function verifica_hora() {
    hrs = (document.dados.hora.value.substring(0, 2));
    min = (document.dados.hora.value.substring(3, 5));

    situacao = "";
    // verifica data e hora
    if ((hrs < 00) || (hrs > 23) || (min < 00) || (min > 59)) {
        situacao = "falsa";
    }

    if (document.dados.hora.value == "") {
        situacao = "falsa";
    }

    if (situacao == "falsa") {
        document.getElementById('destino').innerHTML = "Hora inválida";
        document.dados.hora.focus();
    }
}


//FORMATANDO CPF	  
function MascaraCPF(cpf) {
    if (mascaraInteiro(cpf) == false) {
        event.returnValue = false;
    }
    return formataCampo(cpf, '000.000.000-00', event);
}

//VALIDADNO CPF DIGITADO
//function ValidarCPF(Objcpf) {
//    var cpf = Objcpf.value;
//    exp = /\.|\-/g
//    cpf = cpf.toString().replace(exp, "");
//    var digitoDigitado = eval(cpf.charAt(9) + cpf.charAt(10));
//    var soma1 = 0, soma2 = 0;
//    var vlr = 11;
//
//    for (i = 0; i < 9; i++) {
//        soma1 += eval(cpf.charAt(i) * (vlr - 1));
//        soma2 += eval(cpf.charAt(i) * vlr);
//        vlr--;
//    }
//    soma1 = (((soma1 * 10) % 11) == 10 ? 0 : ((soma1 * 10) % 11));
//    soma2 = (((soma2 + (2 * soma1)) * 10) % 11);
//
//    var digitoGerado = (soma1 * 10) + soma2;
//    if (digitoGerado != digitoDigitado) {
//        document.getElementById('destino').innerHTML = "CPF inválido";
//        document.dados.cpf.focus();
//    } else {
//        document.getElementById('destino').innerHTML = "&nbsp;";
//    }
//
//}

function valCpf($cpf) {
    $cpf = preg_replace('/[^0-9]/', '', $cpf);
    $digitoA = 0;
    $digitoB = 0;
    for ($i = 0, $x = 10; $i <= 8; $i++, $x--) {
        $digitoA += $cpf[$i] * $x;
    }
    for ($i = 0, $x = 11; $i <= 9; $i++, $x--) {
        if (str_repeat($i, 11) == $cpf) {
            return false;
        }
        $digitoB += $cpf[$i] * $x;
    }
    $somaA = (($digitoA % 11) < 2) ? 0 : 11 - ($digitoA % 11);
    $somaB = (($digitoB % 11) < 2) ? 0 : 11 - ($digitoB % 11);
    if ($somaA != $cpf[9] || $somaB != $cpf[10]) {
        document.getElementById('destino').innerHTML = "CPF inválido";
        document.dados.cpf.focus();
        return false
    } else {
        document.getElementById('destino').innerHTML = "&nbsp;";
        return true;
    }
}

//adiciona mascara ao telefone
function MascaraTelefone(tel) {
    if (mascaraInteiro(tel) == false) {
        event.returnValue = false;
    }
    return formataCampo(tel, '(00) 0000-0000', event);
}

//valida telefone
function ValidaTelefone(tel) {
    exp = /\(\d{2}\)\ \d{4}\-\d{4}/
    if (!exp.test(tel.value))
        document.getElementById('destino').innerHTML = "Telefone inválido";
    document.dados.telefone.focus();
}

//adiciona mascara de cep
function MascaraCep(cep) {
    if (mascaraInteiro(cep) == false) {
        event.returnValue = false;
    }
    return formataCampo(cep, '00.000-000', event);
}

//valida CEP
function ValidaCep(cep) {
    exp = /\d{2}\.\d{3}\-\d{3}/
    if (!exp.test(cep.value)) {
        document.getElementById('destino').innerHTML = "CEP inválido";
        document.dados.cep.focus();
    }
}

//valida numero inteiro com mascara
function mascaraInteiro() {
    if (event.keyCode < 48 || event.keyCode > 57) {
        event.returnValue = false;
        return false;
    }
    return true;
}

//formata de forma generica os campos
function formataCampo(campo, Mascara, evento) {
    var boleanoMascara;

    var Digitato = evento.keyCode;
    exp = /\-|\.|\/|\(|\)| /g
    campoSoNumeros = campo.value.toString().replace(exp, "");

    var posicaoCampo = 0;
    var NovoValorCampo = "";
    var TamanhoMascara = campoSoNumeros.length;
    ;

    if (Digitato != 8) { // backspace
        for (i = 0; i <= TamanhoMascara; i++) {
            boleanoMascara = ((Mascara.charAt(i) == "-") || (Mascara.charAt(i) == ".")
                    || (Mascara.charAt(i) == "/"))
            boleanoMascara = boleanoMascara || ((Mascara.charAt(i) == "(")
                    || (Mascara.charAt(i) == ")") || (Mascara.charAt(i) == " "))
            if (boleanoMascara) {
                NovoValorCampo += Mascara.charAt(i);
                TamanhoMascara++;
            } else {
                NovoValorCampo += campoSoNumeros.charAt(posicaoCampo);
                posicaoCampo++;
            }
        }
        campo.value = NovoValorCampo;
        return true;
    } else {
        return true;
    }
}

//function navegador() {
//    var browser = navigator.appName;
//    var ver = navigator.appVersion;
//    var thestart = parseFloat(ver.indexOf("MSIE")) + 1;
//    var brow_ver = parseFloat(ver.substring(thestart + 4, thestart + 7));
//
//    if ((browser == "Microsoft Internet Explorer") && (brow_ver < 7)) {
//        document.getElementById("navegador").innerHTML = "Para melhor visualização, ultilize outro navegador ou uma versão mais recente do Explore";
//    }
//}

function cancelar() {
    location.href = "cad_visita.php?var=cancela";
}

function cancelaAlterPessoa() {
    location.href = "pessoas_cadastradas.php";
}

function cadPessoa() {
    location.href = "include/controlles/cad_pessoa.php";
}

function excluirPessoa(id) {

    var excluir = confirm("Deseja realmente excluir esta pessoa?");

    if (excluir) {
        location.href = "include/controlles/deleta_pessoa.php?id=" + id;
    }
}

// EXCLUIR MILITAR
function deletaMilitar(id) {

    var excluir = confirm("Deseja realmente excluir o militar?");

    if (excluir) {
        location.href = "include/controlles/deleta_militar.php?id=" + id;
    }
}

function alterarPessoa(id) {

    location.href = "alterar_pessoa.php?id_pessoa=" + id;

}