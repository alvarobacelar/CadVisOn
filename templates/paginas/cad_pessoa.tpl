<div id="form-cad">

    <form action="include/controlles/nova_pessoa.php" class="form-inline" method="post" name="dados" onSubmit="return enviardados();">
        <fieldset>
            <legend>Cadastrar Pessoa</legend>

            <h5>O CPF {$cpf} não esta cadastrado, faça o cadastro</h5>
            {$cadPessoa}
            <div class="aviso"> Os campos com (*) serão obrigatorios </div>
            <p class="text-error"><strong> &nbsp;</strong> </p> {* ONDE APARECERÁ OS ALERTAS *}

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
            <input type="text" id="cpf"  name="cpf" value="{$cpf}" maxlength="14" required="" autocomplete="on" placeholder="CPF..."/><p />

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
            {$cadastro}
            <table class="table table-bordered table-hover table-striped">
                <th><center>Nome</center></th><th><center>Alterar</center></th>
                    {* FAZENDO UM LOOP PARA MOSTRAR TODAS AS PESSOAS CADASTRADAS NO BANCO DE DADOS *}
                    {section name=i loop=$nomePessoa loop=$idPessoa}
                    <tr class="success">
                        <td width="250">{$nomePessoa[i]}</td>
                        <td>
                            <a class="btn btn-info btn-xs" onclick="alterarPessoa({$idPessoa[i]})"><span class="glyphicon glyphicon-pencil"></span>
                                Alterar</a>
                        </td>
                    </tr>
                {/section}
                {* FIM DO LOOP *}
            </table>
        </fieldset>
    </div> {* #FORM-LATERAL *}
</div> {* #FORM-CAD *}


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Tirar Foto</h4>
            </div>
            <div class="modal-body">

                {literal}
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
                {/literal}

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


