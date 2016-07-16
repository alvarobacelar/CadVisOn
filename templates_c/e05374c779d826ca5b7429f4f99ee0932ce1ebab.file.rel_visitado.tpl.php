<?php /* Smarty version Smarty-3.1.13, created on 2015-04-24 04:08:14
         compiled from "./templates/paginas/rel_visitado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16711563145539b39e090602-52701194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e05374c779d826ca5b7429f4f99ee0932ce1ebab' => 
    array (
      0 => './templates/paginas/rel_visitado.tpl',
      1 => 1395543769,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16711563145539b39e090602-52701194',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5539b39e097df5_69935191',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5539b39e097df5_69935191')) {function content_5539b39e097df5_69935191($_smarty_tpl) {?><div id="centralizar">

    <fieldset>
        <legend>Pesquisar por nome do visitado</legend>

        <div id="form-cad" class="formata-texto">

            
            <form action="relatorioNomeVisitado.php" method="post" name="dados">
                Nome do visitado<br/>
                <input id="nomeVisitado" name="nomeVisitado" type="text" size="30" class="input-xlarge" maxlength="150" value="" autocomplete="on" placeholder="Quem recebeu visita..." /><br /><br />

                <button type="submit" onclick="this.form.target='_blank';return true;" class="btn btn-lg btn-primary ">Confirmar <span class="glyphicon glyphicon-share"></span></button>
            </form>

        </div>

        <div id="form-cad" class="formata-texto">
            Coloque o nome da pessoa no qual deseja pesquisar. <br/>
            Será gerado um relatorio com as visitas que essa pessoa recebeu.

        </div>
    </fieldset>

</div><?php }} ?>