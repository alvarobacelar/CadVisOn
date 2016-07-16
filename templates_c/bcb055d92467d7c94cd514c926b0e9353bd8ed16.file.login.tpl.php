<?php /* Smarty version Smarty-3.1.13, created on 2015-04-23 23:40:22
         compiled from "/home/www/html/cadvision/templates/login/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38422235755392355d4efd4-18704910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcb055d92467d7c94cd514c926b0e9353bd8ed16' => 
    array (
      0 => '/home/www/html/cadvision/templates/login/login.tpl',
      1 => 1429843181,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38422235755392355d4efd4-18704910',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55392355d64ed7_07655026',
  'variables' => 
  array (
    'erro' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55392355d64ed7_07655026')) {function content_55392355d64ed7_07655026($_smarty_tpl) {?>
<div class="col-md-6 col-md-offset-3">
    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
        <p>Realize o login para ter acesso ao sistema</p><br />
        <?php if (isset($_smarty_tpl->tpl_vars['erro']->value)){?>
            <?php if ($_smarty_tpl->tpl_vars['erro']->value=="Usuario ou senha não correspondem"){?>
                <div class="alert alert-danger erro-login"> <?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
 </div> 
            <?php }else{ ?>
                <div id="erro-login2"> <?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
 </div> 
            <?php }?>
        <?php }?>

        <form name="login" method="post" action="./logar.php" class="form-horizontal" role="form">
            <div class="form-group">
                <label for="inputLogin" class="col-sm-2 control-label">Usuário</label>
                <div class="col-sm-5">
                    <input name="login" type="text" id="login" value="" autofocus required autocomplete="on" placeholder="Login" /> 
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
                <div class="col-sm-5">
                    <input name="senha" type="password" id="senha" value="" required autocomplete="off" placeholder="Senha" /> <br />
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-1">
                    <button type="submit" class="btn btn-default">Entrar</button>
                </div>
            </div>
        </form>

    </div>
</div>

<?php }} ?>