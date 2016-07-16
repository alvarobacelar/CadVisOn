<?php /* Smarty version Smarty-3.1.13, created on 2015-05-05 13:40:24
         compiled from "./templates/paginas/cad_pessoa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40337242455426c8d712434-28046480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee9b3aacb574f6f196206f5c23d053044fc85b1a' => 
    array (
      0 => './templates/paginas/cad_pessoa.tpl',
      1 => 1430844019,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40337242455426c8d712434-28046480',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55426c8d961030_29727911',
  'variables' => 
  array (
    'cpf' => 0,
    'cadPessoa' => 0,
    'cadastro' => 0,
    'nomePessoa' => 0,
    'idPessoa' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55426c8d961030_29727911')) {function content_55426c8d961030_29727911($_smarty_tpl) {?><div id="form-cad">

    <form action="include/controlles/nova_pessoa.php" class="form-inline" method="post" name="dados" onSubmit="return enviardados();">
        <fieldset>
            <legend>Cadastrar Pessoa</legend>

            <h5>O CPF <?php echo $_smarty_tpl->tpl_vars['cpf']->value;?>
 não esta cadastrado, faça o cadastro</h5>
            <?php echo $_smarty_tpl->tpl_vars['cadPessoa']->value;?>

            <div class="aviso"> Os campos com (*) serão obrigatorios </div>
            <p class="text-error"><strong> &nbsp;</strong> </p> 

            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target=".bs-example-modal-lg">
                <span class="glyphicon glyphicon-camera"></span> Capturar Foto
            </button> <br /><br />
            <!--<a href="javascript:void(0)" onclick="javascript: mostra();" id="webcam" class="btn btn-inverse" title="Capturar Foto"><i class="icon-camera icon-white"></i> Capturar Foto</a><br /><br />-->

            Nome*<br>
            <input name="nome" id="nome" type="text" size="50" value="" required="" autocomplete="on" placeholder="Nome da pessoa..." /><p/>

            <div class="form-group">
                RG*<br>
                <input type="text" id="rg" name="rg"  size="25" value=""  required="" autocomplete="on" placeholder="RG..."/><br />
            </div>

            <div class="form-group">
                Sexo<br />
                <select name="sexo" required="" class="form-control" class="span2">
                    <option value=""> Sexo</option>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select>
            </div><br />

            CPF*<br>
            <input type="text" id="cpf"  name="cpf" value="<?php echo $_smarty_tpl->tpl_vars['cpf']->value;?>
" maxlength="14" required="" autocomplete="on" placeholder="CPF..."/><p />

            <div class="form-group">
                Cidade*<br>
                <input type="text" name="cidade" size="30" value="" required="" autocomplete="on" placeholder="Cidade..."/>
            </div>

            <div class="form-group">
                UF<br />
                <select name="uf" required="" class="form-control">
                    <option value="">UF</option>
                    <option value="AC">AC</option>
                    <option value="AL">AL</option>
                    <option value="AP">AP</option>
                    <option value="AM">AM</option>
                    <option value="BA">BA</option>
                    <option value="CE">CE</option>
                    <option value="DF">DF</option>
                    <option value="ES">ES</option>
                    <option value="GO">GO</option>
                    <option value="MA">MA</option>
                    <option value="MT">MT</option>
                    <option value="MS">MS</option>
                    <option value="MG">MG</option>
                    <option value="PA">PA</option>
                    <option value="PB">PB</option>
                    <option value="PR">PR</option>
                    <option value="PE">PE</option>
                    <option value="PI">PI</option>
                    <option value="RJ">RJ</option>
                    <option value="RN">RN</option>
                    <option value="RS">RS</option>
                    <option value="SP">SP</option>
                </select>
            </div><br />

            Veículo<br>
            <input type="text" id="veiculo" name="veiculo" autocomplete="on" maxlength="15"  placeholder="Ex: Chevrolet Celta"/><p />
            
            Placa<br>
            <input type="text" id="placa" name="placa" autocomplete="on" maxlength="15"  placeholder="Ex: XXX-0000"/><p />
            
            Telefone<br>
            <input type="text" id="telefone" name="telefone" autocomplete="on" maxlength="15"  placeholder="Telefone..."/><p />

            Endereço<br>
            <input type="text" name="endereco" size="50" autocomplete="on" placeholder="Endereço (Ex: logradouro, rua, Av..)" /><p/>

            CEP<br>
            <input type="text" name="cep" size="20" size="40px"  autocomplete="on" onBlur="ValidaCep(dados.cep)" onKeyPress="MascaraCep(dados.cep);" placeholder="CEP" /><p/>

            <div class="form-group">
                Bairro<br />
                <input type="text" name="bairro" size="30" size="40px" autocomplete="on" placeholder="Bairro..."/>
            </div>

            <div class="form-group">
                Numero <br />
                <input type="text" name="numero" class="input-small" autocomplete="on" placeholder="Numero"/><p/>
            </div><br />

            Email<br>
            <input name="email" type="email" id="email" size="40" class="formbutton"  autocomplete="on" placeholder="email@exemplo.com.br"/><p/>
            <label>
                <span class="obs">Observação</span> <br />
                <textarea name="mensagem"> </textarea>
            </label>
            <br/>

            <button type="submit" class="btn btn-lg btn-primary ">Salvar  <span class="glyphicon glyphicon-floppy-disk"></span></button>
            <button type="button" onclick="javascript:cancelar();" class="btn btn-danger">Cancelar <span class="glyphicon glyphicon-remove"></span> </button>
        </fieldset>
    </form>

</div>

<div id="form-cad">
    <div id="form-lateral">
        <fieldset>
            <legend>Pessoas Cadastradas</legend><br>
            <?php echo $_smarty_tpl->tpl_vars['cadastro']->value;?>

            <table class="table table-bordered table-hover table-striped">
                <th><center>Nome</center></th><th><center>Alterar</center></th>
                    
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['idPessoa']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <td width="250"><?php echo $_smarty_tpl->tpl_vars['nomePessoa']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
</td>
                        <td>
                            <a class="btn btn-info btn-xs" onclick="alterarPessoa(<?php echo $_smarty_tpl->tpl_vars['idPessoa']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
)"><span class="glyphicon glyphicon-pencil"></span>
                                Alterar</a>
                        </td>
                    </tr>
                <?php endfor; endif; ?>
                
            </table>
        </fieldset>
    </div> 
</div> 


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Tirar Foto</h4>
            </div>
            <div class="modal-body">

                
                    <script type="text/javascript">
                        var flashvars = {};

                        var parameters = {};
                        parameters.scale = "noscale";
                        parameters.wmode = "window";
                        parameters.allowFullScreen = "true";
                        parameters.allowScriptAccess = "always";

                        var attributes = {};

                        swfobject.embedSWF("lib/photo_booth/take_picture.swf", "main", "700", "400", "9",
                        "lib/photo_booth/expressInstall.swf", flashvars, parameters, attributes);
                    </script>

                    <script type="text/javascript">
                        var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
                        document.write(unescape("%3Cscript src='lib/photo_booth/ga.js' type='text/javascript'%3E%3C/script%3E"));
                    </script>

                    <script type="text/javascript">
                        var pageTracker = _gat._getTracker("UA-3097820-1");
                        pageTracker._trackPageview();
                    </script>
                

                <center>
			<div id="main">	
				<div>
					<h1>Instale o adobe flahs 9 ou superior</h1>
					<p><a href="http://www.adobe.com/go/getflashplayer"><img 
					src="images/get_flash_player.gif" 
					alt="Get Adobe Flash player" /></a></p>
				</div>
			</div>
			<br/>
		</center>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button> 
            </div>
        </div>
    </div>
</div>


<?php }} ?>