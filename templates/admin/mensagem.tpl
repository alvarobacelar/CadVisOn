<div id="form-mensagem-unica">

    <fieldset>
        {if isset($msg)}
        <table class="table table-bordered table-hover table-striped">
            <tr class="success">
            {section name=i loop=$nomeMensagem loop=$assuntoMensagem loop=$idMensagem loop=$data}
                <td>
                    <p><strong>Nome:</strong> {$nomeMensagem[i]}<br></p>
                    <p><strong>Assunto:</strong> {$assuntoMensagem[i]}<br></p>
                    <p><strong>Email:</strong> {$email[i]}<br></p>
                    <p><strong>Data:</strong> {$data[i]}<br></p>
                    <p><strong>Mensagem:</strong> <br>{$mensagem[i]}</p>
                </td>
           {/section}
            </tr>
        </table>
        <a class="btn btn-info" href="javascript:history.back()"> Voltar </a>
        <a class="btn btn-info" href="mensagem.php">Todas as Mensagens</a>
        {else}

        <legend> <center><strong> Mensagens de contatos </strong> </center> </legend>
        <div id="ok" class="text-success">  </div>
        <table class="table table-bordered table-hover  table-striped">
            {* FAZENDO O LOOP DA VARIAVEL(ARRAY) QUE RECEBE OS NOMES DO BANCO DE DADOS *}
            <th><center>Nome</center></th><th><center>Data</center></th><th><center>Assunto</center></th><th><center>Mensagem</center></th><th><center>Apagar</center></th>
            {section name=i loop=$nomeMensagem loop=$assuntoMensagem loop=$idMensagem loop=$data}
            <tr class="success">
                <td width="150">{$nomeMensagem[i]}</td>
                <td width="95">{$data[i]}</td>
                <td width="100">{$assuntoMensagem[i]}</td>
                <td width="390">{$mensagem[i]|truncate:40:" ...":true}</td>
                <td width="130">
                    {* A DEFINIR A FUNCAO NO BOTÃO *}
                    <a class="btn btn-info btn-mini" href="mensagem.php?msg={$idMensagem[i]}"><i class="icon-pencil"></i>Ver Mensagem</a>
                </td>
            </tr>
            {/section}
        </table>
        <a class="btn btn-info" href="/cadvision"> Voltar </a>
        {if isset($msg)}
        <a class="btn btn-info" href="mensagem.php">Todas as Mensagens</a>
        {/if}

        {/if}
    </fieldset>
    
</div>