<div id="centralizar">

    <fieldset>
        <legend>Pesquisar por nome do visitado</legend>

        <div id="form-cad" class="formata-texto">

            
            <form action="relatorioNomeVisitado.php" method="post" name="dados">
                Nome do visitado<br/>
                <input id="nomeVisitado" name="nomeVisitado" type="text" size="30" class="input-xlarge" maxlength="150" value="" autocomplete="on" placeholder="Quem recebeu visita..." /><br /><br />

                <button type="submit" onclick="this.form.target='_blank';return true;" class="btn btn-lg btn-primary ">Confirmar <span class="glyphicon glyphicon-share"></span></button>
            </form>

        </div>

        <div id="form-cad" class="formata-texto">
            Coloque o nome da pessoa no qual deseja pesquisar. <br/>
            Será gerado um relatorio com as visitas que essa pessoa recebeu.

        </div>
    </fieldset>

</div>