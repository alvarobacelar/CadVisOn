<?php /* Smarty version Smarty-3.1.13, created on 2015-04-24 03:48:30
         compiled from "./templates/paginas/rel_data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1040154305539aefe2cb6c0-11340389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ae25dc6919a4f9c0739c0e540592ca176e169ce' => 
    array (
      0 => './templates/paginas/rel_data.tpl',
      1 => 1395543703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1040154305539aefe2cb6c0-11340389',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5539aefe302234_56776608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5539aefe302234_56776608')) {function content_5539aefe302234_56776608($_smarty_tpl) {?><div id="centralizar">

    <fieldset>
        <legend>Pesquisar por data</legend>

        <div id="form-cad" class="formata-texto">

            
            <form action="relatorioData.php" method="post" name="dados">
                Data Inicial<br/>
                <input id="relData1" name="relData1" type="text" title="Data Inicial" class="input-xlarge" required="" maxlength="150" value="" autocomplete="on" placeholder="Data Inicial" /><p/>
                Data Final<br/>
                <input id="relData2" name="relData2" type="text" title="Data Final" class="input-xlarge" required="" maxlength="150" value="" autocomplete="on" placeholder="Data Inicial" /><p/>

                <button type="submit" onclick="this.form.target='_blank';return true;" class="btn btn-lg btn-primary ">Confirmar <span class="glyphicon glyphicon-share"></span></button>
            </form>

        </div>

        <div id="form-cad" class="formata-texto">
            Coloque a data inicial e a data final para realizar a pesquisa. <br/>
            Será gerado um relatorio com as visitas na nesta data.<br /><br />
            <strong><big>Data de hoje: <?php echo $_smarty_tpl->tpl_vars['data']->value;?>
<big></strong>

        </div>
    </fieldset>

</div><?php }} ?>