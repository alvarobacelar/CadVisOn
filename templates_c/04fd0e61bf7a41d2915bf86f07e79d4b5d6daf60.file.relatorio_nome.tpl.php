<?php /* Smarty version Smarty-3.1.13, created on 2015-08-14 03:29:14
         compiled from "/home/www/html/cadvision/templates/paginas/relatorio_nome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18704668655cd527a6d2cc6-89304531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04fd0e61bf7a41d2915bf86f07e79d4b5d6daf60' => 
    array (
      0 => '/home/www/html/cadvision/templates/paginas/relatorio_nome.tpl',
      1 => 1395370843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18704668655cd527a6d2cc6-89304531',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pesquisa' => 0,
    'id' => 0,
    'foto' => 0,
    'nome' => 0,
    'data' => 0,
    'hora' => 0,
    'status' => 0,
    'saida' => 0,
    'quemVis' => 0,
    'observacao' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55cd527a801044_50149526',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55cd527a801044_50149526')) {function content_55cd527a801044_50149526($_smarty_tpl) {?>﻿<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        
            <style>   
                .clearfix{*zoom:1;}.clearfix:before,.clearfix:after{display:table;content:"";line-height:0;}
                .clearfix:after{clear:both;}
                .hide-text{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0;}
                .input-block-level{display:block;width:100%;min-height:30px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
                table{max-width:100%;background-color:transparent;border-collapse:collapse;border-spacing:0;}
                .table{width:100%;margin-bottom:20px;}.table th,.table td{padding:8px;line-height:20px;text-align:left;vertical-align:top;border-top:1px solid #dddddd;}
                .table th{font-weight:bold;}
                .table thead th{vertical-align:bottom;}
                .table caption+thead tr:first-child th,.table caption+thead tr:first-child td,.table colgroup+thead tr:first-child th,.table colgroup+thead tr:first-child td,.table thead:first-child tr:first-child th,.table thead:first-child tr:first-child td{border-top:0;}
                .table tbody+tbody{border-top:2px solid #dddddd;}
                .table-condensed th,.table-condensed td{padding:4px 5px;}
                .table-bordered{border:1px solid #dddddd;border-collapse:separate;*border-collapse:collapse;border-left:0;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;}.table-bordered th,.table-bordered td{border-left:1px solid #dddddd;}
                .table-bordered caption+thead tr:first-child th,.table-bordered caption+tbody tr:first-child th,.table-bordered caption+tbody tr:first-child td,.table-bordered colgroup+thead tr:first-child th,.table-bordered colgroup+tbody tr:first-child th,.table-bordered colgroup+tbody tr:first-child td,.table-bordered thead:first-child tr:first-child th,.table-bordered tbody:first-child tr:first-child th,.table-bordered tbody:first-child tr:first-child td{border-top:0;}
                .table-bordered thead:first-child tr:first-child th:first-child,.table-bordered tbody:first-child tr:first-child td:first-child{-webkit-border-top-left-radius:4px;-moz-border-radius-topleft:4px;border-top-left-radius:4px;}
                .table-bordered thead:first-child tr:first-child th:last-child,.table-bordered tbody:first-child tr:first-child td:last-child{-webkit-border-top-right-radius:4px;-moz-border-radius-topright:4px;border-top-right-radius:4px;}
                .table-bordered thead:last-child tr:last-child th:first-child,.table-bordered tbody:last-child tr:last-child td:first-child,.table-bordered tfoot:last-child tr:last-child td:first-child{-webkit-border-bottom-left-radius:4px;-moz-border-radius-bottomleft:4px;border-bottom-left-radius:4px;}
                .table-bordered thead:last-child tr:last-child th:last-child,.table-bordered tbody:last-child tr:last-child td:last-child,.table-bordered tfoot:last-child tr:last-child td:last-child{-webkit-border-bottom-right-radius:4px;-moz-border-radius-bottomright:4px;border-bottom-right-radius:4px;}
                .table-bordered caption+thead tr:first-child th:first-child,.table-bordered caption+tbody tr:first-child td:first-child,.table-bordered colgroup+thead tr:first-child th:first-child,.table-bordered colgroup+tbody tr:first-child td:first-child{-webkit-border-top-left-radius:4px;-moz-border-radius-topleft:4px;border-top-left-radius:4px;}
                .table-bordered caption+thead tr:first-child th:last-child,.table-bordered caption+tbody tr:first-child td:last-child,.table-bordered colgroup+thead tr:first-child th:last-child,.table-bordered colgroup+tbody tr:first-child td:last-child{-webkit-border-top-right-radius:4px;-moz-border-radius-topright:4px;border-top-right-radius:4px;}
                .table-striped tbody tr:nth-child(odd) td,.table-striped tbody tr:nth-child(odd) th{background-color:#f9f9f9;}
                .table-hover tbody tr:hover td,.table-hover tbody tr:hover th{background-color:#f5f5f5;}
                table td[class*="span"],table th[class*="span"],.row-fluid table td[class*="span"],.row-fluid table th[class*="span"]{display:table-cell;float:none;margin-left:0;}
                .table td.span1,.table th.span1{float:none;width:44px;margin-left:0;}
                .table td.span2,.table th.span2{float:none;width:124px;margin-left:0;}
                .table td.span3,.table th.span3{float:none;width:204px;margin-left:0;}
                .table td.span4,.table th.span4{float:none;width:284px;margin-left:0;}
                .table td.span5,.table th.span5{float:none;width:364px;margin-left:0;}
                .table td.span6,.table th.span6{float:none;width:444px;margin-left:0;}
                .table td.span7,.table th.span7{float:none;width:524px;margin-left:0;}
                .table td.span8,.table th.span8{float:none;width:604px;margin-left:0;}
                .table td.span9,.table th.span9{float:none;width:684px;margin-left:0;}
                .table td.span10,.table th.span10{float:none;width:764px;margin-left:0;}
                .table td.span11,.table th.span11{float:none;width:844px;margin-left:0;}
                .table td.span12,.table th.span12{float:none;width:924px;margin-left:0;}
                .table tbody tr.success td{background-color:#dff0d8;}
                .table tbody tr.error td{background-color:#f2dede;}
                .table tbody tr.warning td{background-color:#fcf8e3;}
                .table tbody tr.info td{background-color:#d9edf7;}
                .table-hover tbody tr.success:hover td{background-color:#d0e9c6;}
                .table-hover tbody tr.error:hover td{background-color:#ebcccc;}
                .table-hover tbody tr.warning:hover td{background-color:#faf2cc;}
                .table-hover tbody tr.info:hover td{background-color:#c4e3f3;}
                .well{min-height:20px;padding:19px;margin-bottom:20px;background-color:#f5f5f5;border:1px solid #e3e3e3;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);-moz-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);}.well blockquote{border-color:#ddd;border-color:rgba(0, 0, 0, 0.15);}
                .well-large{padding:24px;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;}
                .well-small{padding:9px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;}
            </style>
            
    </head>
    <body>
        <div class="well well-small">
            <h4>
                Relatório por nome: <?php echo $_smarty_tpl->tpl_vars['pesquisa']->value;?>

            </h4>
        </div>
        <?php if (isset($_smarty_tpl->tpl_vars['id']->value)){?>
            <table class="table table-bordered table-hover">
                <tr>
                    <th><center>Foto</center></th>
                    <th><center>Nome do Visitante</center></th>
                    <th><center>Data Hora Chegada</center></th>
                    <th><center>Data Hora Saída</center></th>
                    <th><center>Quem visitou</center></th>
                    <th><center>Seção que andou</center></th>

                </tr>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['rel'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['rel']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['name'] = 'rel';
$_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['id']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['rel']['total']);
?>
    <tr>
        <td width="100"><img src="<?php echo $_smarty_tpl->tpl_vars['foto']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rel']['index']];?>
" width="100" /></td>
        <td width="200"><?php echo $_smarty_tpl->tpl_vars['nome']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rel']['index']];?>
</td>
        <td width="60" style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rel']['index']];?>
  <?php echo $_smarty_tpl->tpl_vars['hora']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rel']['index']];?>
</td>
        <td width="70" style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rel']['index']];?>
  <?php if ($_smarty_tpl->tpl_vars['status']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rel']['index']]==0){?> <?php echo $_smarty_tpl->tpl_vars['saida']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rel']['index']];?>
 <?php }else{ ?> Visitante Online <?php }?></td>
        <td width="100"><?php echo $_smarty_tpl->tpl_vars['quemVis']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rel']['index']];?>
</td>
        <td width="100"><?php echo $_smarty_tpl->tpl_vars['observacao']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rel']['index']];?>
</td>


    </tr>
<?php endfor; endif; ?> 
</table>
<?php }else{ ?>
    <table class="table table-bordered table-hover">
        <tr>
            <td><center><h2>Não há visitantes com esse Nome.  Tente novamente</h2></center></td>
</tr>
</table>


<?php }?>

</body>
</html><?php }} ?>