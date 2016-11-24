<div id="form-cad">
    <fieldset>
        <legend> <center><strong> Mensagens de contatos </strong> </center> </legend>
        <div id="ok" class="text-success">  </div>
        <table class="table table-bordered table-hover  table-striped">
            {* FAZENDO O LOOP DA VARIAVEL(ARRAY) QUE RECEBE OS NOMES DO BANCO DE DADOS *}
            <th><center>Nome</center></th><th><center>Data</center></th><th><center>Assunto</center></th><th><center>Mensagem</center></th><th><center>Apagar</center></th>
            <tr class="success">
                <td width="150">{$nomeMensagem}</td>
                <td width="85">{$data}</td>
                <td width="100">{$assuntoMensagem}</td>
                <td width="415">{$mensagem}</td>
                <td width="130">
                    {* A DEFINIR A FUNCAO NO BOTÃO *}
                    <a class="btn btn-danger btn-mini" onclick="definirFuncao({$idMensagem})"><i class="icon-pencil"></i>Apagar mensagem</a>
                </td>
            </tr>

        </table>
        <a class="btn btn-info" href="/cadvision"> Voltar </a>
    </fieldset>

</div>