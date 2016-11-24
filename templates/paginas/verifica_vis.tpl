<div class="row">

    <div class="col-xs-4">
        <div class="panel panel-default">
            <div class="panel-heading">

                <h2 class="panel-title">Cadastrar Visita</h2>
            </div>
            <div class="panel-body">

                {$cadVisita} {* MOSTRA SE VISITANTE FOI CADASTRADO *}
                <p id="destino"> &nbsp; </p> {* ONDE APARECERÁ OS ALERTAS *}

                <h6 class="texto">Ponha o NOME ou CPF para realizar o <abbr class="initialism" title="Caso o visitante não esteja cadastrado, será direcionado para uma página de cadastro do mesmo  ">cadastro de visita</abbr>.</h6>
                <form id="verifica_vis" name="verifica_vis" method="post" action="include/controlles/verifica_vis.php"  class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="cfpVerifica" class="col-sm-1 control-label">CPF</label>
                        <div class="col-sm-6">
                            <input type="text" name="cpfVerifica" id="cpfVerifica" value="" required maxlength="14" autocomplete="on" placeholder="CPF..."/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-5">
                            <button type="submit" class="btn btn-lg btn-primary ">Verificar  <span class="glyphicon glyphicon-search"></span></button>
                        </div>
                    </div>

                </form>


                <form name="verifica_nome" method="GET" action="pessoas_cadastradas.php" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="nome" class="col-sm-2 control-label">Nome</label>
                        <div class="col-sm-6">
                            <input type="text" name="nome" id="nome" value="" required maxlength="14" autocomplete="on" placeholder="Nome do Visitante ..."/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-5">
                            <button type="submit" class="btn btn-lg btn-primary ">Verificar  <span class="glyphicon glyphicon-search"></span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    {*MOSTRANDO VISITANDES JA CADASTRADOS*}

    <div class="col-xs-8">
        <div class="panel panel-primary">

            <div class="panel-heading">
                <h2 class="panel-title">Visitantes Cadastrados</h2>
            </div>
            
            <div id="ok" class="text-success">{$desativa} </div> {* MOSTRA SE VISITANTE FOI CADASTRADO *}
            <table class="table table-bordered table-hover table-responsive texto">
                {if $existe == "SIM"} {*VERIFICA DE EXISTE VISITANTES CADASTRADOS*}
                        <th><center>Foto</center></th>
                        <th><center>Nome</center></th>
                        <th><center>Data-Hora de chegada</center></th>
                        <th><center>Quem Visita</center></th>
                        <th><center>Opção</center></th>
                            {section name=a loop=$idVis}
                            <tr class="success">

                                <td width="100"> <img src="{$foto[a]}" alt="Foto Pessoa" width="120" title="{$nomeVis[a]}" /> </td>
                                <td width="190"> {$nomeVis[a]} </td>
                                <td width="100"><center>{$data[a]} - {$hora[a]}</center> </td>
                            <td width="100"> {$quemVis[a]} </td>
                            <td width="50"> <a class="btn btn-xs btn-danger" onclick="desativarVisita({$idVis[a]})">Desativar</a> </td>
                            </tr>
                        {sectionelse}
                            Não há visitantes cadastrados
                        {/section}
                    {/if}
                    {if $existe == "NAO"}
                        <td class="texto"><strong>Não há visitantes cadastrados</strong></td>
                    {/if}

                </table>
            </div>
        </div>
    </div>
