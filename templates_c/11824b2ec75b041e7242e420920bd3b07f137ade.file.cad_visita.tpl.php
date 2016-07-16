<?php /* Smarty version Smarty-3.1.13, created on 2015-08-13 23:19:39
         compiled from "./templates/paginas/cad_visita.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17710708455539ad73181556-90912067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11824b2ec75b041e7242e420920bd3b07f137ade' => 
    array (
      0 => './templates/paginas/cad_visita.tpl',
      1 => 1439518777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17710708455539ad73181556-90912067',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5539ad7324c547_80355382',
  'variables' => 
  array (
    'nomePessoa' => 0,
    'fotoVisitante' => 0,
    'endereco' => 0,
    'cidade' => 0,
    'existe' => 0,
    'idVis' => 0,
    'foto' => 0,
    'nomeVis' => 0,
    'data' => 0,
    'hora' => 0,
    'quemVis' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5539ad7324c547_80355382')) {function content_5539ad7324c547_80355382($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/www/html/cadvision/smarty/plugins/modifier.date_format.php';
?><div class="container theme-showcase" role="main">

    <div class="panel panel-default">

        <div class="panel-heading">

            <h2 class="panel-title">Cadastrar hospedagem de <i><?php echo $_smarty_tpl->tpl_vars['nomePessoa']->value;?>
</i></h2>
        </div>
        <div class="panel-body">
            <form action="include/controlles/nova_visita.php" method="post" name="dados" class="form-horizontal" role="form" onSubmit="return enviardados();">
                <div class="aviso"> Os campos com (*) serão obrigatorios </div>

                <p id="destino"> &nbsp; </p> 
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="nome">Foto do hospede</label>
                    <div class="col-sm-6">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['fotoVisitante']->value;?>
" alt="Imagem pessoa" title="Foto" width="150" />
                    </div>
                </div>



                <div class="form-group">
                    <label class="col-sm-2 control-label" for="nome">Nome do hospede</label>
                    <div class="col-sm-6">
                        <input type="text" name="nome" id="nome" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['nomePessoa']->value;?>
" disabled="" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="endereco">Endereço</label>
                    <div class="col-sm-6">
                        <input type="text" name="endereco" id="endereco" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['endereco']->value;?>
" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="cidade">Cidade</label>
                    <div class="col-sm-3">
                        <input type="text" name="cidade" id="cidade" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['cidade']->value;?>
" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="cidade">Chegou em</label>
                    <div class="col-sm-2">
                        <input type="text" name="cidade" id="cidade" class="form-control" value="<?php echo smarty_modifier_date_format(time(),"%d/%m/%Y");?>
" disabled="" />
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
            <?php if ($_smarty_tpl->tpl_vars['existe']->value=="SIM"){?> 
                    <th><center>Nr</center></th>
                    <th><center>Foto</center></th>
                    <th><center>Nome</center></th>
                    <th><center>Data-Hora de chegada</center></th>
                    <th><center>Quem Visita</center></th>
                    <th><center>Opções</center></th>
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['a'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['a']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['name'] = 'a';
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['idVis']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total']);
?>
                        <tr class="success">
                            <td> <?php echo $_smarty_tpl->tpl_vars['idVis']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
 </td>
                            <td> <img src="<?php echo $_smarty_tpl->tpl_vars['foto']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
" alt="Foto Pessoa" width="100" title="<?php echo $_smarty_tpl->tpl_vars['nomeVis']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
" /> </td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['nomeVis']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
 </td>
                            <td><center><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
 - <?php echo $_smarty_tpl->tpl_vars['hora']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</center> </td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['quemVis']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
 </td>
                        <td> <button type="button" id="desativarVisita" class="btn btn-danger btn-mini" onclick="desativarVisita(<?php echo $_smarty_tpl->tpl_vars['idVis']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
)">Desativar</button> </td>
                        </tr>
                    <?php endfor; else: ?>
                        Não há hospedes cadastrados
                    <?php endif; ?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['existe']->value=="NAO"){?>
                    <td class="texto"><strong>Não há hospedes cadastrados</strong></td>
                <?php }?>
            </table>
        </div>
    </div>

    <p/>
    <p/>
    <p/>

    <center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> Voltar</a></center> <br /><br />

    
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
                        <p id="destino"> &nbsp; </p> 

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


<?php }} ?>