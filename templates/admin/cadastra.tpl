<div id="form-cad">

    <form name="cadastrar" method="post" class="form-inline" action="include/controlles/cad_novo.php" onSubmit="return verificaSenha();">
        <fieldset>
            <legend>Cadastrar Novo Usuário</legend>
            {$cadastro}{* mostra mensagem caso o usuario foi cadstrado *}
            <br />
            <div class="form-group">
                Nome<br>
                <input name="nome" type="text" id="nome" class="form-control" size="40" value="" maxlength="100"  required autocomplete="on" placeholder="Nome..." />
            </div><br />
            Login <br>
            <input name="login" type="text" id="login" value="" maxlength="30" required autocomplete="on" placeholder="Login..." />

            <div class="form-group">
                <select name="nivel" class="form-control" id="nivel">
                    <option value=""> Nível de Acesso </option>
                    <option value="0">Administrador</option>
                    <option value="2">Supervisor</option>
                    <option value="1">Usuario</option>
                </select>
            </div>
            <br />

            Senha<br>
            <input name="senha" type="password" id="senha" value=""  maxlength="40"  required autocomplete="on" placeholder="Senha..." /><br />

            Repetir Senha<br>
            <input name="senha2" type="password" id="senha2" value="" maxlength="40" required autocomplete="on" placeholder="Repetir senha..." onblur="verificaSenha();" /><br>
            <span id="erro-senha"></span> {* DIV QUE MOSTRA SE SENHAS CONFEREM (COMPARAÇÃO NO JAVASCRIPT) *}<br>

            Email <br>
            <input name="email" type="text" id="email" value="" size="35" maxlength="50"  required autocomplete="on" placeholder="Email..." /> <br /><br />


            <button type="submit" class="btn btn-lg btn-primary">Salvar  <span class="glyphicon glyphicon-floppy-disk"></span></button>
            <button type="button" class="btn btn-danger">Cancelar  <span class="glyphicon glyphicon-remove"></span></button>
        </fieldset>

    </form>
</div> {* #FROM-CAD *}

<div id="form-cad">
    <div id="form-lateral">
        <h2><center>Usuários Cadastrados</center></h2>
                {* DIV FEEDBACK DE EXCLUSÃO DE USUARIO *}
        <div id="ok" class="text-success">{$excluido}</div>
        <table class="table table-bordered table-hover  table-striped">
            <th><center>Nome</center></th> <th><center>Opção</center></th>
                {* FAZENDO O LOOP DA VARIAVEL(ARRAY) QUE RECEBE OS NOMES DO BANCO DE DADOS *}
                {section name=i loop=$nomeAdm loop=$idAdm}
                <tr class="success">
                    <td width="250">{$nomeAdm[i]}</td>
                    <td>
                        <a class="btn btn-info  btn-xs" href="altera_usuario.php?user={$idAdm[i]}"><span class="glyphicon glyphicon-edit"></span> Alterar</a>
                        <a class="btn btn-danger  btn-xs" id="excluir" onclick="excluirUsuario({$idAdm[i]})"><span class="glyphicon glyphicon-remove"></span> Excluir</a>

                        {**}
                    </td>
                </tr>
            {/section}
        </table>
    </div> {* #FROM-LATARAL *}
</div> {* #FROM-CAD *}