<?php /* Smarty version Smarty-3.1.13, created on 2016-11-24 14:56:28
         compiled from "./templates/paginas/verifica_vis.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17707746215539a88747daf9-50823575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ff44758ba360015b2558922d13b398de5b041e7' => 
    array (
      0 => './templates/paginas/verifica_vis.tpl',
      1 => 1479910324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17707746215539a88747daf9-50823575',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5539a8875023d2_93186239',
  'variables' => 
  array (
    'cadVisita' => 0,
    'desativa' => 0,
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
<?php if ($_valid && !is_callable('content_5539a8875023d2_93186239')) {function content_5539a8875023d2_93186239($_smarty_tpl) {?><div class="row">

    <div class="col-xs-4">
        <div class="panel panel-default">
            <div class="panel-heading">

                <h2 class="panel-title">Cadastrar Visita</h2>
            </div>
            <div class="panel-body">

                <?php echo $_smarty_tpl->tpl_vars['cadVisita']->value;?>
 
                <p id="destino"> &nbsp; </p> 

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


    

    <div class="col-xs-8">
        <div class="panel panel-primary">

            <div class="panel-heading">
                <h2 class="panel-title">Visitantes Cadastrados</h2>
            </div>
            
            <div id="ok" class="text-success"><?php echo $_smarty_tpl->tpl_vars['desativa']->value;?>
 </div> 
            <table class="table table-bordered table-hover table-responsive texto">
                <?php if ($_smarty_tpl->tpl_vars['existe']->value=="SIM"){?> 
                        <th><center>Foto</center></th>
                        <th><center>Nome</center></th>
                        <th><center>Data-Hora de chegada</center></th>
                        <th><center>Quem Visita</center></th>
                        <th><center>Opção</center></th>
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

                                <td width="100"> <img src="<?php echo $_smarty_tpl->tpl_vars['foto']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
" alt="Foto Pessoa" width="120" title="<?php echo $_smarty_tpl->tpl_vars['nomeVis']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
" /> </td>
                                <td width="190"> <?php echo $_smarty_tpl->tpl_vars['nomeVis']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
 </td>
                                <td width="100"><center><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
 - <?php echo $_smarty_tpl->tpl_vars['hora']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</center> </td>
                            <td width="100"> <?php echo $_smarty_tpl->tpl_vars['quemVis']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
 </td>
                            <td width="50"> <a class="btn btn-xs btn-danger" onclick="desativarVisita(<?php echo $_smarty_tpl->tpl_vars['idVis']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
)">Desativar</a> </td>
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
<?php }} ?>