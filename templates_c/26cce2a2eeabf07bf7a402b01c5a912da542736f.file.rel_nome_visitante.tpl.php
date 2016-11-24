<?php /* Smarty version Smarty-3.1.13, created on 2016-11-24 14:56:40
         compiled from "./templates/paginas/rel_nome_visitante.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5148932455539b39a85e758-70779032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26cce2a2eeabf07bf7a402b01c5a912da542736f' => 
    array (
      0 => './templates/paginas/rel_nome_visitante.tpl',
      1 => 1479910324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5148932455539b39a85e758-70779032',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5539b39a8d73a9_33467670',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5539b39a8d73a9_33467670')) {function content_5539b39a8d73a9_33467670($_smarty_tpl) {?><div id="centralizar">

    <fieldset>
        <legend>Pesquisar por nome</legend>

        <div id="form-cad" class="formata-texto">

            
            <form action="relatorioNome.php" method="post" name="dados">
                Nome da pessoa<br/>
                <input id="nome" name="nome" type="text" size="30" class="input-xlarge" maxlength="150" value="" autocomplete="on" placeholder="Nome da pessoa..." /><br /><br />

                <button type="submit" onclick="this.form.target='_blank';return true;" class="btn btn-lg btn-primary ">Confirmar <span class="glyphicon glyphicon-share"></span></button>
            </form>

        </div>

        <div id="form-cad" class="formata-texto">
            Coloque o nome da pessoa no qual deseja pesquisar. <br/>
            Será gerado um relatorio com as visitas dessa pessoa

        </div>
    </fieldset>

</div><?php }} ?>