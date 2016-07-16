<div class="container theme-showcase" role="main">

    <div class="panel panel-default">
        <div class="panel-heading">

            <h2 class="panel-title">Cadastrar Hospedagem</h2>
        </div>
        <div class="panel-body">

            {$cadVisita} {* MOSTRA SE VISITANTE FOI CADASTRADO *}
            <p id="destino"> &nbsp; </p> {* ONDE APARECERÁ OS ALERTAS *}

            <h6 class="texto">Ponha o NOME ou CPF do hospede para cadastrar registrar a hospedagem.</h6>
            <form id="verifica_vis" name="verifica_vis" method="post" action="include/controlles/verifica_vis.php"  class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="cfpVerifica" class="col-sm-2 control-label">CPF</label>
                    <div class="col-sm-2">
                        <input type="text" name="cpfVerifica" id="cpfVerifica" class="form-control" value="" required maxlength="14" autocomplete="on" placeholder="CPF..."/>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-6">
                        <button type="submit" class="btn btn-lg btn-primary ">Verificar  <span class="glyphicon glyphicon-search"></span></button>
                    </div>
                </div>

            </form>


            <form name="verifica_nome" action="pessoas_cadastradas.php" class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="nome" class="col-sm-2 control-label">Nome</label>
                    <div class="col-sm-6">
                        <input type="text" name="nome" id="nome" required="" class="form-control" placeholder="Nome do hospede ..."/>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-6">
                        <button type="submit" class="btn btn-lg btn-primary ">Verificar  <span class="glyphicon glyphicon-search"></span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>



    {*MOSTRANDO VISITANDES JA CADASTRADOS*}


    <div class="panel panel-primary">

        <div class="panel-heading">
            <h2 class="panel-title">Hospedes Cadastrados</h2>
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
                    <td class="texto"><strong>Não há nenhum hospede</strong></td>
                {/if}

            </table>
        </div>
    </div>
                <p/>
                <p/>
                <p/>
                
                <center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> Voltar</a></center> <br /><br />
                