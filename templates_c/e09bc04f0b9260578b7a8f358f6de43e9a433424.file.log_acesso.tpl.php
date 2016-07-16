<?php /* Smarty version Smarty-3.1.13, created on 2015-04-23 23:26:59
         compiled from "./templates/paginas/log_acesso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3995331455539a1ab112fb6-18725495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e09bc04f0b9260578b7a8f358f6de43e9a433424' => 
    array (
      0 => './templates/paginas/log_acesso.tpl',
      1 => 1429842417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3995331455539a1ab112fb6-18725495',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5539a1ab136ab2_74890826',
  'variables' => 
  array (
    'logUsr' => 0,
    'l' => 0,
    'paginacao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5539a1ab136ab2_74890826')) {function content_5539a1ab136ab2_74890826($_smarty_tpl) {?><div class="panel panel-primary">

    <div class="panel-heading">

        <h2 class="panel-title">Logs de acesso ao sistema</h2>
    </div>
    <div class="table-responsive table-bordered">
        <table class="table table-bordered texto">

            <?php if (isset($_smarty_tpl->tpl_vars['logUsr']->value)){?>

                <th>Id acesso</th>
                <th>Login de acesso</th>
                <th>IP de acesso</th>
                <th>Data/hora do acesso</th>
                <th>Observação do acesso</th>
                    <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logUsr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
                    <tr class="active">
                        <td><?php echo $_smarty_tpl->tpl_vars['l']->value->id_acesso;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['l']->value->login_acesso;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['l']->value->ip_acesso;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['l']->value->data_acesso;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['l']->value->obs_acesso;?>
</td>
                    </tr>
                <?php } ?>
            <?php }else{ ?>
                <tr class="danger">
                    <td>Nenhum log registrado</td>
                </tr>

            <?php }?>

        </table>
    </div>


    <p/>
    <p/>
    <div class="text-center"><?php echo $_smarty_tpl->tpl_vars['paginacao']->value;?>
</div><br />
    <center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> 
    <p/>
    <p/>
</div><?php }} ?>