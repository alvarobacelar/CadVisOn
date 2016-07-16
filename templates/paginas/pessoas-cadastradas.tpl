{$excluir}
{$cadastro}
<div class="panel panel-primary">

    <div class="panel-heading">

        <h2 class="panel-title">Pessoas Cadastradas</h2>
    </div>

    <div class="table-responsive table-bordered">
        <table class="table table-bordered  table-responsive texto">
            {if isset ($nome)}
                <th><center>Foto</center></th><th><center>Nome</center></th><th><center>Identidade</center></th><th><center>Cidade</center></th><th><center>Telefone</center></th><th><center>Opção</center></th>

                {section name=a loop=$nome}
                    <tr class="success">
                        <td><img src="{$foto[a]}" alt="Foto {$nome[a]}" title="{$nome[a]}" width="150" /></td>
                        <td>{$nome[a]}</td>
                        <td>{$identidade[a]}</td>
                        <td>{$cidade[a]}-{$estado[a]}</td>
                        <td>{$telefone[a]}</td>
                        <td width="150" style="text-align: center;">

                            <a onclick="alterarPessoa({$id[a]})" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span> Editar</a>
                            <form name="visita" method="POST" action="include/controlles/verifica_vis.php">
                                <input type="hidden" id="cpfVerifica" name="cpfVerifica" value="{$cpf[a]}" /> 
                                <button type="submit" name="enviaCPF" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-ok-circle"></span> Cadastrar hospedagem</button></a>
                            </form>
                        </td>
                    </tr>
                {/section}
            {else}
                <td><center>Não há pessoas cadastradas</center></td>
                {/if}
        </table>
        </fieldset>
    </div>
</div>
<center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> Voltar</a></center> <br /><br />