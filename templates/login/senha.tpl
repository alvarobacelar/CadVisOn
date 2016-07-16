 <div id="login-dois">     	
    <p>Enviar Senha</p>
</div>      


<div id="login-um"> 

    <div id="log">
        {if isset($erro) && $erro == "NAO"}
        <div id="erro-login"> Usuario não existe </div> {* mostragem de erro de acesso *}
        {else}
        <div id="erro-login2"> {$erro} </div> {* mostragem de erro de acesso *}
        {/if}
        <form name="senha" method="post" action="include/controlles/recuperar_senha.php">
            Login<br>
            <input type="text" name="login" id="login" class="span3" value="" autofocus required autocomplete="on" placeholder="Login" /><br />

            Email<br />
            <input type="email" name="email" id="email" class="span4" value="" required autocomplete="on" placeholder="Email de confirmação da senha" /><br /><br />

            <button type="submit" class="btn btn-inverse btn-large btn-primary">Enviar</button>

        </form>
    </div> {* fim da div log *}
    <br>
    <center><p><a href="/cadvision" class="btn btn-small"> <i class="icon-arrow-left"></i> Voltar </a></p></center>

</div> {* fim div login-um *}
