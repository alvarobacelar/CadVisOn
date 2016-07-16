<div id="centralizar">

    <fieldset>
        <legend>Pesquisar por data</legend>

        <div id="form-cad" class="formata-texto">

            
            <form action="relatorioData.php" method="post" name="dados">
                Data Inicial<br/>
                <input id="relData1" name="relData1" type="text" title="Data Inicial" class="input-xlarge" required="" maxlength="150" value="" autocomplete="on" placeholder="Data Inicial" /><p/>
                Data Final<br/>
                <input id="relData2" name="relData2" type="text" title="Data Final" class="input-xlarge" required="" maxlength="150" value="" autocomplete="on" placeholder="Data Inicial" /><p/>

                <button type="submit" onclick="this.form.target='_blank';return true;" class="btn btn-lg btn-primary ">Confirmar <span class="glyphicon glyphicon-share"></span></button>
            </form>

        </div>

        <div id="form-cad" class="formata-texto">
            Coloque a data inicial e a data final para realizar a pesquisa. <br/>
            Será gerado um relatorio com as visitas na nesta data.<br /><br />
            <strong><big>Data de hoje: {$data}<big></strong>

        </div>
    </fieldset>

</div>