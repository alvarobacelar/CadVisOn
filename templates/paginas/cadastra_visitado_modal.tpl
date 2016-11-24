<div id="floater" class="modal" style="display: block">

    <script>
        function esconde() {
            if (document.getElementById("floater").style.display == "block") {
                document.getElementById("floater").style.display = "none";
                location="cad_visita.php";
            }
        }
    </script>

    <div id="cadVisitadoModal">

        <form action="include/controlles/cadastra_visitado.php" method="post" name="dados" onSubmit="return enviardados();">
            <fieldset>
                <legend>Cadastrar Militar</legend>

                <div class="aviso"> Os campos com (*) serão obrigatorios </div>
                
                <p id="destino"> &nbsp; </p> {* ONDE APARECERÁ OS ALERTAS *}
                Nome*<br>
                <input name="nome" type="text" class="input-xxlarge" id="nome" maxlength="150" value="" autocomplete="on" placeholder="Nome da pessoa..." /><p/>
                RG*<br>
                <input type="text" name="rg" class="formbuttom" id="rg" size="25" maxlength="14" value="" autocomplete="on" placeholder="RG..."/><p/>

                Telefone*<br>
                <input type="text" name="telefone" size="20" autocomplete="on" maxlength="15" onKeyPress="MascaraTelefone(dados.telefone);" placeholder="Telefone..."/><p />
                Email<br>
                <input name="email" type="email" id="email" class="input-xlarge" maxlength="150" class="formbutton"  autocomplete="on" placeholder="email@exemplo.com.br"/><p/>
                Função<br>
                <input name="funcao" type="text" id="funcao" class="input-xlarge" maxlength="30" class="formbutton" autocomplet="on" placeholder="Função" /><p/>
                Seção<br>
                <input name="secao" type="text" id="secao" class="input-xlarge" maxlength="30" class="formbutton" autocomplet="on" placeholder="Seção" /><p/><p/>

                <button type="submit" class="btn btn-large btn-primary ">Salvar  <i class="icon-ok"></i></button>
                <a type="button" id="cancelar" href="javascript:void(0)" onclick="javascript:esconde();" class="btn btn-danger">Cancela  <i class="icon-remove"></i></a>
            </fieldset>
        </form>
    </div>
</div>