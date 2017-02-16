<?php /* Smarty version Smarty-3.1.13, created on 2017-02-15 22:19:07
         compiled from "./templates/admin/cadastra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165278194658a4fe0be17964-73230676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66d174682fc7af4fad697ad3d6bb242759f2b6c1' => 
    array (
      0 => './templates/admin/cadastra.tpl',
      1 => 1479910328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165278194658a4fe0be17964-73230676',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cadastro' => 0,
    'excluido' => 0,
    'nomeAdm' => 0,
    'idAdm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_58a4fe0be742c6_25078854',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a4fe0be742c6_25078854')) {function content_58a4fe0be742c6_25078854($_smarty_tpl) {?><div id="form-cad">

    <form name="cadastrar" method="post" class="form-inline" action="include/controlles/cad_novo.php" onSubmit="return verificaSenha();">
        <fieldset>
            <legend>Cadastrar Novo Usuário</legend>
            <?php echo $_smarty_tpl->tpl_vars['cadastro']->value;?>

            <br />
            <div class="form-group">
                Nome<br>
                <input name="nome" type="text" id="nome" class="form-control" size="40" value="" maxlength="100"  required autocomplete="on" placeholder="Nome..." />
            </div><br />
            Login <br>
            <input name="login" type="text" id="login" value="" maxlength="30" required autocomplete="on" placeholder="Login..." />

            <div class="form-group">
                <select name="nivel" class="form-control" id="nivel">
                    <option value=""> Nível de Acesso </option>
                    <option value="0">Administrador</option>
                    <option value="2">Supervisor</option>
                    <option value="1">Usuario</option>
                </select>
            </div>
            <br />

            Senha<br>
            <input name="senha" type="password" id="senha" value=""  maxlength="40"  required autocomplete="on" placeholder="Senha..." /><br />

            Repetir Senha<br>
            <input name="senha2" type="password" id="senha2" value="" maxlength="40" required autocomplete="on" placeholder="Repetir senha..." onblur="verificaSenha();" /><br>
            <span id="erro-senha"></span> <br>

            Email <br>
            <input name="email" type="text" id="email" value="" size="35" maxlength="50"  required autocomplete="on" placeholder="Email..." /> <br /><br />


            <button type="submit" class="btn btn-lg btn-primary">Salvar  <span class="glyphicon glyphicon-floppy-disk"></span></button>
            <button type="button" class="btn btn-danger">Cancelar  <span class="glyphicon glyphicon-remove"></span></button>
        </fieldset>

    </form>
</div> 

<div id="form-cad">
    <div id="form-lateral">
        <h2><center>Usuários Cadastrados</center></h2>
                
        <div id="ok" class="text-success"><?php echo $_smarty_tpl->tpl_vars['excluido']->value;?>
</div>
        <table class="table table-bordered table-hover  table-striped">
            <th><center>Nome</center></th> <th><center>Opção</center></th>
                
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['idAdm']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <tr class="success">
                    <td width="250"><?php echo $_smarty_tpl->tpl_vars['nomeAdm']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
</td>
                    <td>
                        <a class="btn btn-info  btn-xs" href="altera_usuario.php?user=<?php echo $_smarty_tpl->tpl_vars['idAdm']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
"><span class="glyphicon glyphicon-edit"></span> Alterar</a>
                        <a class="btn btn-danger  btn-xs" id="excluir" onclick="excluirUsuario(<?php echo $_smarty_tpl->tpl_vars['idAdm']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
)"><span class="glyphicon glyphicon-remove"></span> Excluir</a>

                        
                    </td>
                </tr>
            <?php endfor; endif; ?>
        </table>
    </div> 
</div> <?php }} ?>