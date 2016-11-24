
<div class="col-md-6 col-md-offset-3">
    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
        <p>Realize o login para ter acesso ao sistema</p><br />
        {if isset($erro)}
            {if $erro == "Usuario ou senha não correspondem"}
                <div class="alert alert-danger erro-login"> {$erro} </div> {* mostragem de erro de acesso *}
            {else}
                <div id="erro-login2"> {$erro} </div> {* mostragem de erro de acesso *}
            {/if}
        {/if}

        <form name="login" method="post" action="./logar.php" class="form-horizontal" role="form">
            <div class="form-group">
                <label for="inputLogin" class="col-sm-2 control-label">Usuário</label>
                <div class="col-sm-5">
                    <input name="login" type="text" id="login" value="" autofocus required autocomplete="on" placeholder="Login" /> 
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
                <div class="col-sm-5">
                    <input name="senha" type="password" id="senha" value="" required autocomplete="off" placeholder="Senha" /> <br />
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-1">
                    <button type="submit" class="btn btn-default">Entrar</button>
                </div>
            </div>
        </form>

    </div>
</div>

