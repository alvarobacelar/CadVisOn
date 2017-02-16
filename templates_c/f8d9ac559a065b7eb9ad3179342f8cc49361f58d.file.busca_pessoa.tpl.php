<?php /* Smarty version Smarty-3.1.13, created on 2017-02-15 22:11:36
         compiled from "./templates/paginas/busca_pessoa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110498252458a4fc48a0e4e5-07185643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8d9ac559a065b7eb9ad3179342f8cc49361f58d' => 
    array (
      0 => './templates/paginas/busca_pessoa.tpl',
      1 => 1479910310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110498252458a4fc48a0e4e5-07185643',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'busca' => 0,
    'pessoa' => 0,
    'nomeBusca' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_58a4fc48c24be8_03276314',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a4fc48c24be8_03276314')) {function content_58a4fc48c24be8_03276314($_smarty_tpl) {?>
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
                                <button type="submit" name="enviaCPF" class="btn bnt-lg btn-success"><span class="glyphicon glyphicon-edit"></span> Cadastrar Visita</button></a>
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
<center><a class="btn btn-default" href="javascript:history.back()">Voltar</a></center> <br /><br /><?php }} ?>