<?php

// FUNCAO DE AUTENTICAÇÃO DO USUARIO

class LogAcesso {

//funcao para registrar log de acesso
    function logAcesso($id, $obs = "Usuário registrado") {
        $data = date('Y-m-d H:i:s') . ' ' . date('H:i:s');

        $ip = $_SERVER["REMOTE_ADDR"];
        $log = new ManipulateData();
        $log->setTable("acesso_usuario");
        $log->setCamposBanco("login_acesso, ip_acesso, data_acesso, obs_acesso");
        $log->setDados("'$id', ' $ip', '$data', '$obs'");
        $log->insert();
    }

}
