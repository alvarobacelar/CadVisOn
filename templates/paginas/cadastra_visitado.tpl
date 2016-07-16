<div class="row">

    <div class="col-md-5">

        <div class="panel panel-default">

            <div class="panel-heading">

                <h2 class="panel-title">Cadastrar Militar</h2>
            </div>
            <div class="panel-body">
                <form action="include/controlles/cadastra_visitado.php" method="post" name="dados" onSubmit="return enviardados();" class="form-horizontal" role="form">

                    <input type="hidden" id="form" name="form" value="" />

                    <div class="aviso"> Os campos com (*) serão obrigatorios </div>
                    {$visitado} {* mostra mensagem caso o usuario foi cadstrado *}

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
                    <select id="secao" name="secao" required title="Escolha a seção">
                        <option value="">Escolha a Seção</option>
                        <optgroup label="Seções">
                            <option value="1º Secão">1º Seção</option>
                            <option value="2º Secão">2º Seção</option>
                            <option value="3º Seção">3º Seção</option>
                            <option value="4º Seção">4º Seção</option>
                            <option value="Almoxarifado">Almoxarifado</option>
                            <option value="Arquivo">Arquivo</option>
                            <option value="Aprovisionamento">Aprovisionamento</option>
                            <option value="Banda de Música">Banda de Música</option>
                            <option value="Credenciamento">Credenciamento</option>
                            <option value="Conformidade">Conformidade Gestão</option>
                            <option value="Enfermaria">Enfermaria</option>
                            <option value="Operação Pipa">Operação Pipa</option>
                            <option value="SALC">SALC</option>
                            <option value="Seção de Informática">Seção de Informática</option>
                            <option value="Seção de Saúde">Seção de Saúde</option>
                            <option value="Setor de Pagamento Pessoal">SPP</option>
                            <option value="Pelotão de Comunicação">Pelotão de Comunicações</option>
                            <option value="Pelotão de  Manutenção Transporte">Pelotão de Mnt Transporte</option>
                            <option value="Pelotão de Obras">Pelotão de Obras</option>
                            <option value="SFPC">SFPC</option>
                            <option value="Tesouraria">Tesouraria</option>

                        </optgroup>
                        <optgroup label="Comando">
                            <option value="Comandante">Comandante</option>
                            <option value="Sub Comandante">Sub Comandante</option>
                        </optgroup>
                        <optgroup label="Companhias">
                            <option value="1º Cia Fuz">1º Cia Fuz</option>
                            <option value="2º Cia Fuz">2º Cia Fuz</option>
                            <option value="CCAp">CCAp</option>
                            <option value="NPOR">NPOR</option>
                        </optgroup>
                        <optgroup label="Permissionários">
                            <option value="Cantina">Cantina</option>
                            <option value="Barbearia">Barbearia</option>
                            <option value="Alfaiataria">Alfaiataria</option>
                        </optgroup>


                    </select><p />
                    -->

                    <button type="submit" class="btn btn-lg btn-primary ">Cadastrar  <span class="glyphicon glyphicon-floppy-disk"></span></button>
                    <button type="button" class="btn btn-danger">Cancelar  <span class="glyphicon glyphicon-remove"></span></button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>



    {* MOSTRA OS MILITARES CADASTRADOS *}
    <div class="col-md-6">
        <div class="panel panel-primary">

            <div class="panel-heading">

                <h2 class="panel-title">Pessoas Cadastradas</h2>
            </div>

            <div class="table-responsive table-bordered">    
                <div id="form-lateral">
                    <div id="aviso"></div>{* aqui ficará os avisos de freeadbak *}
                    {$excluir} 
                    <table class="table table-bordered table-hover  table-striped">
                        <th><center>Nome</center></th>
                        <th><center>Seçao</center></th>
                        <th><center>Opções</center></th>
                            {foreach $resultado as $resul}
                            <tr class="success">
                                <td width="200">{$resul->visitado_nome}</td>
                                <td width="200">{$resul->visitado_secao}</td>
                                <td>
                                    <a href="altera_visitado.php?id={$resul->id_visitado}" class="btn btn-info  btn-xs"><span class="glyphicon glyphicon-edit"></span> Editar</a> 
                                    <a onclick="deletaMilitar({$resul->id_visitado})" class="btn btn-danger  btn-xs"><span class="glyphicon glyphicon-remove"></span> Excluir</a> 
                                </td>
                            </tr>
                        {/foreach}
                    </table>

                    </fieldset>
                    {$paginacao}
                </div>
            </div>
        </div>
    </div>
</div>