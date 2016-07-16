<?php /* Smarty version Smarty-3.1.13, created on 2015-08-13 23:03:54
         compiled from "./templates/paginas/pessoas-cadastradas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16094698605539a888c746f9-89334897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c31dd21e740df4408b5690649a805eb1925ddc67' => 
    array (
      0 => './templates/paginas/pessoas-cadastradas.tpl',
      1 => 1439515054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16094698605539a888c746f9-89334897',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5539a888cd9b36_99115618',
  'variables' => 
  array (
    'excluir' => 0,
    'cadastro' => 0,
    'nome' => 0,
    'foto' => 0,
    'identidade' => 0,
    'cidade' => 0,
    'estado' => 0,
    'telefone' => 0,
    'id' => 0,
    'cpf' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5539a888cd9b36_99115618')) {function content_5539a888cd9b36_99115618($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['excluir']->value;?>

<?php echo $_smarty_tpl->tpl_vars['cadastro']->value;?>

<div class="panel panel-primary">

    <div class="panel-heading">

        <h2 class="panel-title">Pessoas Cadastradas</h2>
    </div>

    <div class="table-responsive table-bordered">
        <table class="table table-bordered  table-responsive texto">
            <?php if (isset($_smarty_tpl->tpl_vars['nome']->value)){?>
                <th><center>Foto</center></th><th><center>Nome</center></th><th><center>Identidade</center></th><th><center>Cidade</center></th><th><center>Telefone</center></th><th><center>Opção</center></th>

                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['a'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['a']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['name'] = 'a';
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['nome']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <td><img src="<?php echo $_smarty_tpl->tpl_vars['foto']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
" alt="Foto <?php echo $_smarty_tpl->tpl_vars['nome']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
" title="<?php echo $_smarty_tpl->tpl_vars['nome']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
" width="150" /></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['nome']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['identidade']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['cidade']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
-<?php echo $_smarty_tpl->tpl_vars['estado']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['telefone']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</td>
                        <td width="150" style="text-align: center;">

                            <a onclick="alterarPessoa(<?php echo $_smarty_tpl->tpl_vars['id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
)" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span> Editar</a>
                            <form name="visita" method="POST" action="include/controlles/verifica_vis.php">
                                <input type="hidden" id="cpfVerifica" name="cpfVerifica" value="<?php echo $_smarty_tpl->tpl_vars['cpf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
" /> 
                                <button type="submit" name="enviaCPF" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-ok-circle"></span> Cadastrar hospedagem</button></a>
                            </form>
                        </td>
                    </tr>
                <?php endfor; endif; ?>
            <?php }else{ ?>
                <td><center>Não há pessoas cadastradas</center></td>
                <?php }?>
        </table>
        </fieldset>
    </div>
</div>
<center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> Voltar</a></center> <br /><br /><?php }} ?>