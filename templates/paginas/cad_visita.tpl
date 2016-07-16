<div class="container theme-showcase" role="main">

    <div class="panel panel-default">

        <div class="panel-heading">

            <h2 class="panel-title">Cadastrar hospedagem de <i>{$nomePessoa}</i></h2>
        </div>
        <div class="panel-body">
            <form action="include/controlles/nova_visita.php" method="post" name="dados" class="form-horizontal" role="form" onSubmit="return enviardados();">
                <div class="aviso"> Os campos com (*) serão obrigatorios </div>

                <p id="destino"> &nbsp; </p> {* ONDE APARECERÁ OS ALERTAS *}
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="nome">Foto do hospede</label>
                    <div class="col-sm-6">
                        <img src="{$fotoVisitante}" alt="Imagem pessoa" title="Foto" width="150" />
                    </div>
                </div>



                <div class="form-group">
                    <label class="col-sm-2 control-label" for="nome">Nome do hospede</label>
                    <div class="col-sm-6">
                        <input type="text" name="nome" id="nome" class="form-control" value="{$nomePessoa}" disabled="" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="endereco">Endereço</label>
                    <div class="col-sm-6">
                        <input type="text" name="endereco" id="endereco" class="form-control" value="{$endereco}" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="cidade">Cidade</label>
                    <div class="col-sm-3">
                        <input type="text" name="cidade" id="cidade" class="form-control" value="{$cidade}" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="cidade">Chegou em</label>
                    <div class="col-sm-2">
                        <input type="text" name="cidade" id="cidade" class="form-control" value="{$smarty.now|date_format:"%d/%m/%Y"}" disabled="" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="diarias">Total de diárias</label>
                    <div class="col-sm-2">
                        <input type="text" id="diarias" name="diarias" class="form-control" required="" title="Total de diárias" placeholder="5 diarias" autocomplete="" />
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-2 control-label" for="particular">Particular</label>
                    <div class="col-sm-6">
                        <input type="text" id="particular" name="particular" class="form-control"  required="" title=".." placeholder="..." autocomplete="" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="prefeitura">Prefeitura Municipal</label>
                    <div class="col-sm-6">
                        <input type="text" id="prefeitura" name="prefeitura" class="form-control" required="" title="Prefeitura" placeholder="EX: Prefeitura municipal de Teresina" autocomplete="" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="prefeitura">Débito</label>
                    <div class="col-sm-6">
                        <input type="text" id="debito" name="debito" class="form-control" required="" title="Debito" placeholder="Débito" autocomplete="" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="obs">Observações</label>
                    <div class="col-sm-6">
                        <textarea class="form-control" required="" id="obs" name="obs"> </textarea>
                    </div>
                </div>
                <br/>

                <button type="submit" class="btn btn-lg btn-primary ">Cadastrar  <span class="glyphicon glyphicon-floppy-disk"></span></button>
                <button type="button" onclick="javascript:cancelar();" class="btn btn-danger">Cancelar <span class="glyphicon glyphicon-remove"></span></button>
                </fieldset>
            </form>
        </div>
    </div>



    <div class="panel panel-primary">

        <div class="panel-heading">

            <h2 class="panel-title">Hospedes cadastrados</h2>
        </div>

        <table class="table table-bordered table-hover table-responsive">
            {if $existe == "SIM"} {*VERIFICA DE EXISTE VISITANTES CADASTRADOS*}
                    <th><center>Nr</center></th>
                    <th><center>Foto</center></th>
                    <th><center>Nome</center></th>
                    <th><center>Data-Hora de chegada</center></th>
                    <th><center>Quem Visita</center></th>
                    <th><center>Opções</center></th>
                        {section name=a loop=$idVis}
                        <tr class="success">
                            <td> {$idVis[a]} </td>
                            <td> <img src="{$foto[a]}" alt="Foto Pessoa" width="100" title="{$nomeVis[a]}" /> </td>
                            <td> {$nomeVis[a]} </td>
                            <td><center>{$data[a]} - {$hora[a]}</center> </td>
                        <td> {$quemVis[a]} </td>
                        <td> <button type="button" id="desativarVisita" class="btn btn-danger btn-mini" onclick="desativarVisita({$idVis[a]})">Desativar</button> </td>
                        </tr>
                    {sectionelse}
                        Não há hospedes cadastrados
                    {/section}
                {/if}
                {if $existe == "NAO"}
                    <td class="texto"><strong>Não há hospedes cadastrados</strong></td>
                {/if}
            </table>
        </div>
    </div>

    <p/>
    <p/>
    <p/>

    <center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> Voltar</a></center> <br /><br />

    {* DIV MODAL DE CADASTRO DE VISITADO *}
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">


        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Cadastrar Militar</h4>
                </div>
                <div class="modal-body">


                    <form action="include/controlles/cadastra_visitado.php" method="post" name="dados" onSubmit="return enviardados();" class="form-horizontal" role="form">


                        <div class="aviso"> Os campos com (*) serão obrigatorios </div>
                        <p id="destino"> &nbsp; </p> {* ONDE APARECERÁ OS ALERTAS *}

                        <div class="form-group form-group-sm">
                            <label class="col-sm-2 control-label" for="inputNome">Nome* </label>
                            <div class="col-sm-6">
                                <input id="nome" name="nome" type="text" title="Nome do militar" value="" autocomplete="on" required placeholder="Ex: Sgt Ribamar" /><p/>
                            </div>
                        </div>


                        <div class="form-group form-group-sm">
                            <label class="col-sm-2 control-label" for="secao">Seção</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" id="secao" name="secao" required="" placeholder="Ex: Seção de Informática">
                            </div>
                        </div>
                        <!--
                        Seção<br>
                        <select id="secao" name="secao" required title="Escolha a seção">
                            <option value="">Escolha a seção</option>
                            <optgroup label="Seções">
                                <option value="1sec">1º Seção</option>
                                <option value="2sec">2º Seção</option>
                                <option value="3sec">3º Seção</option>
                                <option value="4sec">4º Seção</option>
                                <option value="almox">Almoxarifado</option>
                                <option value="aprov">Aprovisionamento</option>
                                <option value="enfermaria">Enfermaria</option>
                                <option value="salc">SALC</option>
                                <option value="sec infor">Seção de Informática</option>
                                <option value="spp">SPP</option>
                                <option value="pel com">Pelotão de Comunicações</option>
                                <option value="pel mnt">Pelotão de Manutenção</option>
                                <option value="pel obras">Pelotão de Obras</option>
                                <option value="op pipa">Operação Pipa</option>
                            </optgroup>
                            <optgroup label="Comando">
                                <option value="comandante">Comandante</option>
                                <option value="sub comandante">Sub Comandante</option>
                            </optgroup>
                            <optgroup label="Companhias">
                                <option value="1cia">1º Cia Fuz</option>
                                <option value="2cia">2º Cia Fuz</option>
                                <option value="banda">Banda de Musica</option>
                                <option value="ccap">CCAp</option>
                                <option value="npor">NPOR</option>
                            </optgroup>
                            <optgroup label="Permissionários">
                                <option value="catina">Cantina</option>
                                <option value="barbearia">Barbearia</option>
                                <option value="alfaiataria">Alfaiataria</option>
                            </optgroup>


                        </select><p />
                        -->


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>


