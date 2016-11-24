<div id="form-cad">
    <div id="form-lateral">
        <fieldset>
            <legend>Pessoa já cadastrada</legend>
            {* FALTA ESTILIZAR ESSA MENSAGEM *}
            
            <table class="table table-bordered table-hover table-striped">
                <th><center>Id</center></th><th><center>Nome</center></th><th><center>Foto</center></th><th><center>Hora de chegada</center></th><th><center>Quem Visita</center></th><th><center>Opção</center></th>
            
                <tr class="success">
                    <td> {$idVis} </td>
                    <td> <img src="{$foto}" alt="Foto Pessoa" title="Foto" /> </td>
                    <td> {$nomeVis} </td>
                    <td><center> {$hora}</center> </td>
                    <td> {$quemVis} </td>
                    <td> <a class="btn btn-mini btn-danger" onclick="desativarVisita({$idVis})">Desativar Visita</a> </td>
                </tr>
            
            </table>
            <a href="cad_visita.php" class="btn" >Voltar</a>
        </fieldset>
    </div>
</div>