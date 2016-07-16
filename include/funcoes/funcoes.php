<?php

function formataData($data) {
    list($ano, $mes, $dia) = explode("-", $data);
    return $dia . "/" . $mes . "/" . $ano;
}

function formata_data_db($data) {
    if (($data[4] != '-') || ($data[7] != '-')) {
        list($dia, $mes, $ano) = explode("/", $data);
        return $ano . "-" . $mes . "-" . $dia;
    } else {
        return $data;
    }
}

// FUNÇÃO DE LISTAR CONTATOS (EM TESTE)
function listarContato() {
    // FAZENDO A LISTAGEM DOS CONTATOS ENVIADOS
    $listar = new ManipulateData();
    $smarty = new Smarty();

    $listar->setTable("contato"); // SETANDO A TABELA PARA A CONSULTA
    $listar->setValueId("id_contato"); // SETANDO O VALOR DA ID PARA ORDENAR PELA MAIS RECENTE
    $listar->selectOrder(); // CHAMANDO A SELEÇÃO POR ORDEM DECRECENTE

    while ($contato = $listar->fetch_object()) {
        $listId[] = $contato->id_contato;
        $listRemetente[] = $contato->contato_nome;
        $listAssunto[] = $contato->contato_assunto;

        $smarty->assign("listId", $listId);
        $smarty->assign("nomeRemetente", $listRemetente);
        $smarty->assign("listAssunto", $listAssunto);
    }

    // FIM DA LISTAGE DE CONTADOS DO BANCO DE DADOS
}

function validarCPF($cpf) {
    // remove os caracteres não-numéricos
    $cpf = preg_replace('/\D/', '', $cpf);

    // verifica se a sequência tem 11 dígitos
    if (strlen($cpf) != 11)
        return false;

    // calcula o primeiro dígito verificador 
    $sum = 0;
    for ($i = 0; $i < 9; $i++) {
        $sum += $cpf[$i] * (10 - $i);
    }
    $mod = $sum % 11;
    $digit = ($mod > 1) ? (11 - $mod) : 0;

    // verifica se o primeiro dígito verificador está correto
    if ($cpf[9] != $digit)
        return false;

    // calcula o segundo dígito verificador
    $sum = 0;
    for ($i = 0; $i < 10; $i++) {
        $sum += $cpf[$i] * (11 - $i);
    }
    $mod = $sum % 11;
    $digit = ($mod > 1) ? (11 - $mod) : 0;

    // verifica se o segundo dígito verificador está correto
    if ($cpf[10] != $digit)
        return false;

    // Repetir 11 vezes o mesmo número não é permitido, pois não existem CPFs com esta formação numérica.
    if (str_repeat($cpf[0], 11) == $cpf) {
        return false;
    }
    // está tudo certo
    return true;
}
?>