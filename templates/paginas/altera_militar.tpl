<div id="form-cad">

    <form action="include/controlles/altera_visitado.php" method="post" name="dados" onSubmit="return enviardados();">
        <fieldset>
            <legend>Alterar {$visitadoAltera->visitado_nome}</legend>

            <p id="destino"> &nbsp; </p> {* ONDE APARECERÁ OS ALERTAS *}
            
            <input type="hidden" id="id" name="id" value="{$visitadoAltera->id_visitado}" />
            Nome*<br>
            <input id="nome" name="nome" type="text" size="35" title="Nome do militar" maxlength="150" value="{$visitadoAltera->visitado_nome}" autocomplete="on" required placeholder="Ex: Sgt Ribamar" /><p/>

            Seção<br>
            <select id="secao" name="secao" required title="Escolha a seção">
                <option value="{$visitadoAltera->visitado_secao}">{$visitadoAltera->visitado_secao}</option>
                <optgroup label="Seções">
                    <option value="1º Secão">1º Seção</option>
                    <option value="2º Secão">2º Seção</option>
                    <option value="3º Seção">3º Seção</option>
                    <option value="4º Seção">4º Seção</option>
                    <option value="Almoxarifado">Almoxarifado</option>
                    <option value="Aprovisionamento">Aprovisionamento</option>
                    <option value="Enfermaria">Enfermaria</option>
                    <option value="SALC">SALC</option>
                    <option value="Seção de Informática">Seção de Informática</option>
                    <option value="Setor de Pagamento Pessoal">SPP</option>
                    <option value="Pelotão de Comunicação">Pelotão de Comunicações</option>
                    <option value="Pelotão de  Manutenção Transporte">Pelotão de Manutenção</option>
                    <option value="Pelotão de Obras">Pelotão de Obras</option>
                </optgroup>
                <optgroup label="Comando">
                    <option value="Comandante">Comandante</option>
                    <option value="Sub Comandante">Sub Comandante</option>
                </optgroup>
                <optgroup label="Companhias">
                    <option value="1º Cia Fuz">1º Cia Fuz</option>
                    <option value="2º Cia Fuz">2º Cia Fuz</option>
                    <option value="Banda de Musica">Banda de Musica</option>
                    <option value="CCAp">CCAp</option>
                    <option value="NPOR">NPOR</option>
                </optgroup>
                <optgroup label="Permissionários">
                    <option value="Cantina">Cantina</option>
                    <option value="Barbearia">Barbearia</option>
                    <option value="Alfaiataria">Alfaiataria</option>
                </optgroup>


            </select><p />

            <button type="submit" class="btn btn-lg btn-primary ">Alterar  <span class="glyphicon glyphicon-floppy-disk"></span></button>
            <button type="button" class="btn btn-danger">Cancelar  <span class="glyphicon glyphicon-remove"></span></button>
        </fieldset>
    </form>
    <center><a class="btn btn-default" href="javascript:history.back()">Voltar</a></center> 
</div>
