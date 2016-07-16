<div class="panel panel-primary">

    <div class="panel-heading">

        <h2 class="panel-title">Logs de acesso ao sistema</h2>
    </div>
    <div class="table-responsive table-bordered">
        <table class="table table-bordered texto">

            {if isset($logUsr)}

                <th>Id acesso</th>
                <th>Login de acesso</th>
                <th>IP de acesso</th>
                <th>Data/hora do acesso</th>
                <th>Observação do acesso</th>
                    {foreach $logUsr as $l}
                    <tr class="active">
                        <td>{$l->id_acesso}</td>
                        <td>{$l->login_acesso}</td>
                        <td>{$l->ip_acesso}</td>
                        <td>{$l->data_acesso}</td>
                        <td>{$l->obs_acesso}</td>
                    </tr>
                {/foreach}
            {else}
                <tr class="danger">
                    <td>Nenhum log registrado</td>
                </tr>

            {/if}

        </table>
    </div>


    <p/>
    <p/>
    <div class="text-center">{$paginacao}</div><br />
    <center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> 
    <p/>
    <p/>
</div>