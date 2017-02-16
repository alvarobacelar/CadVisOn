<?php /* Smarty version Smarty-3.1.13, created on 2017-02-15 22:03:55
         compiled from "./templates/paginas/cad_visita.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105428825858a4fa7bf111b5-80788942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11824b2ec75b041e7242e420920bd3b07f137ade' => 
    array (
      0 => './templates/paginas/cad_visita.tpl',
      1 => 1479910324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105428825858a4fa7bf111b5-80788942',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nomePessoa' => 0,
    'fotoVisitante' => 0,
    'nome' => 0,
    'existe' => 0,
    'idVis' => 0,
    'foto' => 0,
    'nomeVis' => 0,
    'data' => 0,
    'hora' => 0,
    'quemVis' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_58a4fa7c286440_52909646',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a4fa7c286440_52909646')) {function content_58a4fa7c286440_52909646($_smarty_tpl) {?><div class="row">

    <div class="col-xs-6">

        <div class="panel panel-default">

            <div class="panel-heading">

                <h2 class="panel-title">Cadastrar Visita de <?php echo $_smarty_tpl->tpl_vars['nomePessoa']->value;?>
</h2>
            </div>
            <div class="panel-body">
                <form action="include/controlles/nova_visita.php" method="post" name="dados" onSubmit="return enviardados();">
                    <div class="aviso"> Os campos com (*) serão obrigatorios </div>

                    <p id="destino"> &nbsp; </p> 

                    <img src="<?php echo $_smarty_tpl->tpl_vars['fotoVisitante']->value;?>
" alt="Imagem pessoa" title="Foto" width="150" /><br /><br />
                    <strong>Nome</strong><br />
                    <input type="text" name="nome" size="40" value="<?php echo $_smarty_tpl->tpl_vars['nomePessoa']->value;?>
" disabled /><br /><br />

                    
                    <strong>A quem veio visitar?</strong><br />
                    <select required="" name="quemVis">
                        <option value="">Veio visitar quem?</option>
                        
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['nome']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?> 
                            <option value="<?php echo $_smarty_tpl->tpl_vars['nome']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
"> <?php echo $_smarty_tpl->tpl_vars['nome']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
 </option>
                        <?php endfor; endif; ?>
                        
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
                                Não há visitantes cadastrados
                            <?php endif; ?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['existe']->value=="NAO"){?>
                            <td class="texto"><strong>Não há visitantes cadastrados</strong></td>
                        <?php }?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
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
                        <p id="destino"> &nbsp; </p> 
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


<?php }} ?>