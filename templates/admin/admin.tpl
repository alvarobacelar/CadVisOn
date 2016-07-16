
<div id="admin">
    <div id="admin_texto">
        Bem vindo ao sistema de cadastro de Hospedes da Pensão Genivaldo Geni.
    </div>

    <div class="col-xs-12">
        <div class="panel panel-primary">

            <div class="panel-heading">
                <h2 class="panel-title">Hospedes Cadastrados</h2>
            </div>
            <table class="table table-bordered table-hover table-responsive texto">
                {if $existe == "SIM"} {*VERIFICA DE EXISTE VISITANTES CADASTRADOS*}
                        <th><center>Id</center></th>
                        <th><center>Foto</center></th>
                        <th><center>Nome</center></th>
                        <th><center>Nr Chrachá</center></th>
                        <th><center>Data hora que entrou</center></th>
                        <th><center>Quem visita</center></th>
                        <th><center>Seção que está</center></th>
                        <th><center>Opção</center></th>
                            {section name=a loop=$idVis}
                            <tr class="success">
                                <td width="10"> {$idVis[a]} </td>
                                <td width="100"> <img src="{$foto[a]}" alt="Foto Pessoa" width="120" title="{$nomeVis[a]}" /> </td>
                                <td width="300"> {$nomeVis[a]} </td>
                                <td width="100"> {$cracha[a]} </td>
                                <td width="150"><center>{$data[a]} - {$hora[a]}</center> </td>
                            <td width="150"> {$quemVis[a]} </td>
                            <td width="160"> {$secao[a]} </td>
                            <td width="50"> <a class="btn btn-xs btn-danger" onclick="desativarVisita({$idVis[a]})"><span class="glyphicon glyphicon-remove"></span> Desativar</a> </td>
                            </tr>
                        {sectionelse}
                            Não há hospedes cadastrados
                        {/section}
                    {/if}
                    {if $existe == "NAO"}
                        <td><strong>Não há hospedes cadastrados</strong></td>
                    {/if}

                </table>
                </fieldset>

            </div>

        </div>
    </div>