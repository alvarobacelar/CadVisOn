<div id="form-cad">



    <form action="include/controlles/grava_contato.php" class="contato" method="post" name="fcontato" class="borda" onSubmit="return valida_contato()">
        <fieldset>
            <legend> Fale Conosco </legend>

            <div id="ok" class="text-success"> {$contato} </div> {* mostra mensagem caso o usuario foi cadstrado *}

            <label>
                <span>Nome<br></span>
                <input name="EditNome" type="text" class="span4" id="EditNome" value="" required autocomplete="on" placeholder="Nome...">
            </label>
            <br />

            <label>
                <span>E-mail<br></span>
                <input name="EditMail" class="span4" type="email" id="EditMail" value="" required autocomplete="on" placeholder="Email...">
            </label>
            <br />

            <label>
                <span>Motivo<br></span>
                <select name="opcao" id="opcao" size="1">
                    <option value="duvida"> Dúvida</option>
                    <option value="reclamação"> Reclamação</option>
                    <option value="sugestão"> Sugestão</option>
                    <option value="outros"> Outros</option>
                </select>
            </label>
            <br />

            <label>
                <span>Mensagem<br></span>
                <textarea name="Mensagem" cols="30" rows="5">...Digite sua mensagem...</textarea>
            </label>
            <br />
            <br />

            <label>
                <span></span>
                <button type="submit" class="btn btn-large btn-primary ">Enviar  <i class="icon-ok"></i></button>
                <a class="btn" href="fale_conosco.php">Cancelar <i class="icon-remove"></i></a>
            </label>
        </fieldset>
        <br>
        <center> <a href="/cadvision/" class="btn">Voltar</a> </center>
    </form>

</div>

<div id="form-cad">

    <fieldset>
        <legend>Contatos</legend>
        <h5>Entre em contato com o administrador</h5>
        <div id="contato">
            <strong> Fone:</strong> 86 3333-3333 <br>
            <strong>Email:</strong> contato@cadvision.com.br
        </div>

        <strong>Obs:</strong> O CadVisiOn é um sistema de controle de visitante, <br>onde procuramos atenter todos os publicos. Qualquer<br> duvida, ente em contato conosco
    </fieldset>

</div>