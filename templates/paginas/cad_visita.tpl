<div class="row">

    <div class="col-xs-6">

        <div class="panel panel-default">

            <div class="panel-heading">

                <h2 class="panel-title">Cadastrar Visita de {$nomePessoa}</h2>
            </div>
            <div class="panel-body">
                <form action="include/controlles/nova_visita.php" method="post" name="dados" onSubmit="return enviardados();">
                    <div class="aviso"> Os campos com (*) serão obrigatorios </div>

                    <p id="destino"> &nbsp; </p> {* ONDE APARECERÁ OS ALERTAS *}

                    <img src="{$fotoVisitante}" alt="Imagem pessoa" title="Foto" width="150" /><br /><br />
                    <strong>Nome</strong><br />
                    <input type="text" name="nome" size="40" value="{$nomePessoa}" disabled /><br /><br />

                    {* <input type="text" name="quemVis" class="span4" value="" maxlength="50" autocomplete="on" placeholder="Quem veio visitar?" /><p/> *}
                    <strong>A quem veio visitar?</strong><br />
                    <select required="" name="quemVis">
                        <option value="">Veio visitar quem?</option>
                        {* FAZENDO UM LOOP NOS MILITARES CADASTRADOS E COLOCANDO DENTRO DE UM OPTION *}
                        {section name=i loop=$nome} 
                            <option value="{$nome[i]}"> {$nome[i]} </option>
                        {/section}
                        {* FIM DO LOOP *}
                        <br />
                    </select>
                    <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        Cadastrar Militar
                    </button>
                    <!--<a id="cadastraVisita" href="javascript:void(0)" onclick="javascript: mostra();" class="btn btn-info btn-mini">Cadastrar novo militar</a>-->
                    <br /> <br />
                    <strong>Crachá do visitante</strong><br />
                    <input type="text" id="cracha" name="cracha" value="" required="" title="Crachá" placeholder="Nr Crachá" autocomplete="" />
                    <br /> <br />
                    <label>
                        <span class="obs">Seção que vai visitar</span> <br />
                        <textarea cols=""  required="" rows="" class="obs" name="obs"> </textarea>
                    </label>
                    <br/>

                    <button type="submit" class="btn btn-lg btn-primary ">Cadastrar  <span class="glyphicon glyphicon-floppy-disk"></span></button>
                    <button type="button" onclick="javascript:cancelar();" class="btn btn-danger">Cancelar <span class="glyphicon glyphicon-remove"></span></button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

    <div class="col-xs-6">
        <div class="col-md-6">
            <div class="panel panel-primary">

                <div class="panel-heading">

                    <h2 class="panel-title">Visitantes Cadastrados</h2>
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
    </div>
    {* DIV MODAL DE CADASTRO DE VISITADO *}
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">


        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Cadastrar Militar</h4>
                </div>
                <div class="modal-body">


                    <form action="include/controlles/cadastra_visitado.php" method="post" name="dados" onSubmit="return enviardados();">


                        <div class="aviso"> Os campos com (*) serão obrigatorios </div>
                        <p id="destino"> &nbsp; </p> {* ONDE APARECERÁ OS ALERTAS *}
                        Nome*<br>
                        <input name="nome" type="text" title="Nome do militar" class="input-xlarge" id="nome" maxlength="150" value="" autocomplete="on" required placeholder="Ex: Sgt Fulano" /><p/>

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


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>


