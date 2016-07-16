<div id="form-cad">

    <form name="cadastrar" method="post" class="form-inline" action="include/controlles/update_usuario.php?idUsuario={$idUsuario}" onSubmit="return verificaSenha();">
        <fieldset>
            <legend>Alterar Usuário: {$nome}</legend>

            Nome<br>
            <input name="nome" type="text" id="nome" size="45" value="{$nome}" maxlength="100" required autocomplete="on" placeholder="Nome..." /><br><br>

            <div class="form-group">
                Login <br>
                <input name="login" type="text" id="login" value="{$login1}" maxlength="30" required autocomplete="on" placeholder="Login..." />
            </div>

            <div class="form-group">
            Nível de acesso<br />
            <select name="nivel" id="nivel">
                <option value="{$nivel}"> {if $nivel == 0} Administrador {/if} {if $nivel == 2} Supervisor {/if} {if $nivel == 1} Usuario {/if} </option>
                <option value="0">Administrador</option>
                <option value="2">Supervisor</option>
                <option value="1">Usuario</option>
            </select>
            </div><br />

            Nova senha<br>
            <input name="senha" type="password" id="senha" value="" maxlength="40"  required autocomplete="on" placeholder="Alterar Senha??" /><br />

            Repetir Senha<br>
            <input name="senha2" type="password" id="senha2" value="" maxlength="40" required autocomplete="on" placeholder="Repetir senha..." onblur="verificaSenha();" /><br>

            <span id="erro-senha"></span> {* DIV QUE MOSTRA SE SENHAS CONFEREM (COMPARAÇÃO NO JAVASCRIPT) *}<br>


            Email <br>
            <input name="email" type="text" id="email" size="35" value="{$email}" maxlength="50"  required autocomplete="on" placeholder="Email..." /> <br /><br />

            <button type="submit" class="btn btn-lg btn-primary">Alterar  <span class="glyphicon glyphicon-floppy-disk"></span></button>
            <a href="cadastra_novo.php" class="btn btn-danger">Cancelar  <span class="glyphicon glyphicon-remove"></span></a><br /><br />

            <center><a href="cadastra_novo.php" class="btn btn-default"> Voltar </a></center>
        </fieldset>

    </form>

</div> {* #FROM-CAD *}
