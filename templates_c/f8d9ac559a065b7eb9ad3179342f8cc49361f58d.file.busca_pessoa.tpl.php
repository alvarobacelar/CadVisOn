<?php /* Smarty version Smarty-3.1.13, created on 2015-08-13 22:18:35
         compiled from "./templates/paginas/busca_pessoa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194510650955426d94bcca02-84279035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8d9ac559a065b7eb9ad3179342f8cc49361f58d' => 
    array (
      0 => './templates/paginas/busca_pessoa.tpl',
      1 => 1439515112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194510650955426d94bcca02-84279035',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55426d94d06b98_10900230',
  'variables' => 
  array (
    'busca' => 0,
    'pessoa' => 0,
    'nomeBusca' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55426d94d06b98_10900230')) {function content_55426d94d06b98_10900230($_smarty_tpl) {?>
<div id="form-pessoa">    
    <fieldset>
        <legend>Busca por pessoas</legend>
        <table class="table table-bordered table-hover table-striped">
            <?php if (isset($_smarty_tpl->tpl_vars['busca']->value)){?>
                <th><center>Foto</center></th><th><center>Nome</center></th><th><center>Cidade</center></th><th><center>Telefone</center></th><th><center>Opção</center></th>

                <?php  $_smarty_tpl->tpl_vars['pessoa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pessoa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['busca']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pessoa']->key => $_smarty_tpl->tpl_vars['pessoa']->value){
$_smarty_tpl->tpl_vars['pessoa']->_loop = true;
?>
                    <tr class="success">
                        <td><img src="<?php echo $_smarty_tpl->tpl_vars['pessoa']->value->foto;?>
" alt="Foto <?php echo $_smarty_tpl->tpl_vars['pessoa']->value->nome;?>
" title="<?php echo $_smarty_tpl->tpl_vars['pessoa']->value->nome;?>
" width="200" /></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['pessoa']->value->nome;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['pessoa']->value->cidade;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['pessoa']->value->telefone;?>
</td>
                        <td width="150" style="text-align: center;">
                            <form name="visita" method="POST" action="include/controlles/verifica_vis.php">
                                <input type="hidden" id="cpfVerifica" name="cpfVerifica" value="<?php echo $_smarty_tpl->tpl_vars['pessoa']->value->cpf;?>
" /> 
                                <button type="submit" name="enviaCPF" class="btn bnt-lg btn-success"><span class="glyphicon glyphicon-edit"></span> Cadastrar hospedagem</button></a>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            <?php }else{ ?>
                <div class="alert alert-danger"><center>Não há ninguém cadastrado com o nome <strong><?php echo $_smarty_tpl->tpl_vars['nomeBusca']->value;?>
</strong> <a onclick="cadPessoa()" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Realizar Cadastro</a> </center></div>
            <?php }?>
        </table>
    </fieldset>
</div>
<center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> Voltar</a></center> <br /><br /><?php }} ?>