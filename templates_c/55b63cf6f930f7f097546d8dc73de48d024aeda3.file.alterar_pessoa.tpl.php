<?php /* Smarty version Smarty-3.1.13, created on 2015-05-05 13:58:46
         compiled from "./templates/paginas/alterar_pessoa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17182769225548f60240eb73-10916834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55b63cf6f930f7f097546d8dc73de48d024aeda3' => 
    array (
      0 => './templates/paginas/alterar_pessoa.tpl',
      1 => 1430845118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17182769225548f60240eb73-10916834',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5548f60245d743_79791679',
  'variables' => 
  array (
    'objeto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5548f60245d743_79791679')) {function content_5548f60245d743_79791679($_smarty_tpl) {?><div id="form-cad">

    <form action="include/controlles/altera_pessoa.php" class="form-inline" method="post" name="dados" onSubmit="return enviardados();">
        <fieldset>
            <legend>Alterar Pesssoa</legend>

            <div class="aviso"> Os campos com (*) serão obrigatorios </div>
            <p class="text-error"><strong> &nbsp;</strong> </p> 

            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target=".bs-example-modal-lg">
                <span class="glyphicon glyphicon-camera"></span> Alterar Foto
            </button> <br /><br />

            <input type="hidden" id="id_pessoa" name="id_pessoa" value="<?php echo $_smarty_tpl->tpl_vars['objeto']->value->id_pessoa;?>
" />


            <!--<a href="javascript:void(0)" onclick="javascript: mostra();" id="webcam" class="btn btn-inverse" title="Capturar Foto"><i class="icon-camera icon-white"></i> Capturar Foto</a><br /><br />-->

            <img src="<?php echo $_smarty_tpl->tpl_vars['objeto']->value->foto;?>
" width="200" style="float: right; margin-top: -120px;" title="<?php echo $_smarty_tpl->tpl_vars['objeto']->value->nome;?>
" alt="Foto <?php echo $_smarty_tpl->tpl_vars['objeto']->value->nome;?>
" /> <br /><br />
            <input type="hidden" id="foto" name="foto" value="<?php echo $_smarty_tpl->tpl_vars['objeto']->value->foto;?>
" />

            Nome*<br>
            <input name="nome" id="nome" type="text" size="50" value="<?php echo $_smarty_tpl->tpl_vars['objeto']->value->nome;?>
" required="" autocomplete="on" placeholder="Nome da pessoa..." /><p/>

            <div class="form-group">
                RG*<br>
                <input type="text" id="rg" name="rg"  size="25" value="<?php echo $_smarty_tpl->tpl_vars['objeto']->value->rg;?>
"  required="" autocomplete="on" placeholder="RG..."/><br />
            </div>

            <div class="form-group">
                Sexo<br />
                <select name="sexo" required="" class="form-control" class="span2">
                    <option value="<?php echo $_smarty_tpl->tpl_vars['objeto']->value->sexo;?>
"><?php if ($_smarty_tpl->tpl_vars['objeto']->value->sexo=="M"){?> Masculino <?php }else{ ?> Feminino<?php }?></option>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select>
            </div><br />

            CPF*<br>
            <input type="text" id="cpf"  name="cpf" value="<?php echo $_smarty_tpl->tpl_vars['objeto']->value->cpf;?>
" required="" autocomplete="on" placeholder="CPF..."/><p />

            <div class="form-group">
                Cidade*<br>
                <input type="text" name="cidade" size="30" value="<?php echo $_smarty_tpl->tpl_vars['objeto']->value->cidade;?>
" required="" autocomplete="on" placeholder="Cidade..."/>
            </div>

            <div class="form-group">
                UF<br />
                <select name="uf" required="" class="form-control">
                    <option value="<?php echo $_smarty_tpl->tpl_vars['objeto']->value->uf;?>
"><?php echo $_smarty_tpl->tpl_vars['objeto']->value->uf;?>
</option>
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
            <input type="text" id="veiculo" name="veiculo" autocomplete="on" value="<?php echo $_smarty_tpl->tpl_vars['objeto']->value->veiculo;?>
" placeholder="Ex: Chevrolet Celta"/><p />
            
            Placa<br>
            <input type="text" id="placa" name="placa" autocomplete="on" value="<?php echo $_smarty_tpl->tpl_vars['objeto']->value->placa;?>
" placeholder="Ex: XXX-0000"/><p />
            
            Telefone<br>
            <input type="text" name="telefone" size="26" autocomplete="on" value="<?php echo $_smarty_tpl->tpl_vars['objeto']->value->telefone;?>
" onKeyPress="MascaraTelefone(dados.telefone);" placeholder="Telefone..."/><p />

            Endereço<br>
            <input type="text" name="endereco" size="50" autocomplete="on" value="<?php echo $_smarty_tpl->tpl_vars['objeto']->value->endereco;?>
" placeholder="Endereço (Ex: logradouro, rua, Av..)" /><p/>

            CEP<br>
            <input type="text" name="cep" size="20" size="40px" autocomplete="on" value="<?php echo $_smarty_tpl->tpl_vars['objeto']->value->cep;?>
" onBlur="ValidaCep(dados.cep)" onKeyPress="MascaraCep(dados.cep);" placeholder="CEP" /><p/>

            <div class="form-group">
                Bairro<br />
                <input type="text" name="bairro" size="30" size="40px" value="<?php echo $_smarty_tpl->tpl_vars['objeto']->value->bairro;?>
" autocomplete="on" placeholder="Bairro..."/>
            </div>

            <div class="form-group">
                Numero <br />
                <input type="text" name="numero" class="input-small" value="<?php echo $_smarty_tpl->tpl_vars['objeto']->value->numero;?>
" autocomplete="on" placeholder="Numero"/><p/>
            </div><br />

            <label>
                <span class="obs">Observação</span> <br />
                <textarea name="mensagem"><?php echo $_smarty_tpl->tpl_vars['objeto']->value->obs;?>
 </textarea>
            </label>
            <br/>

            <button type="submit" class="btn btn-lg btn-primary ">Salvar  <span class="glyphicon glyphicon-floppy-disk"></span></button>
            <button type="button" onclick="javascript:cancelaAlterPessoa()();" class="btn btn-danger">Cancela <span class="glyphicon glyphicon-remove"></span> </button>
        </fieldset>
    </form>

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
                        //var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
                        document.write(unescape("%3Cscript src='lib/photo_booth/ga.js' type='text/javascript'%3E%3C/script%3E"));
                    </script>


                    <script type="text/javascript">
                        var pageTracker = _gat._getTracker("UA-3097820-1");
                        pageTracker._trackPageview();
                    </script>
                

                <center>
                    <div id="main">	
                        <div>
                            <h1>Você precisa FlashPlayer 9 ou superior!</h1>
                            <p><a href=""><img 
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