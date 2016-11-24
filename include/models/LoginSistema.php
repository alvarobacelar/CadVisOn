<?php

class LoginSistema {

// FUNCAO DE AUTENTICAÇÃO DO USUARIO
    function autentica($login, $senha) {

        $funcao[0] = "Administrador";
        $funcao[1] = "Usuario";
        $funcao[2] = "Supervisor";

        $fun_max = 2;

        $db = new ManipulateData();
        $db->query("select * from usuario where login='$login' and senha= '$senha' and status=1");
        if ($db->registros_retornados()) {
            $obj = $db->fetch_object();
            $session_id = md5(time() . $obj->id_usuario);

            $_SESSION["SessionId"] = $session_id;
            $_SESSION["login"] = $obj->login;
            $_SESSION["usuario"] = $obj->nome;
            $_SESSION["usuario_id"] = $obj->id_usuario;
            $id = $_SESSION["usuario_id"];

            $this->logAcesso($login, "Acesso autorizado");

            if ($fun_max > 2) {
                $_SESSION["nivel"] = "Não identificado";
            } else {
                $_SESSION["nivel"] = $funcao[$obj->nivel];
                $nivel = $_SESSION['nivel'];
            }
            $data = date("Y-m-d");
            $hora = date("H:i:s");
            $ip = $_SERVER["REMOTE_ADDR"];

//            header("location: ./");

            echo "<script>
                window.location.href = './';
                </script>";
            exit;
        } else {

            $_SESSION["erro"] = "erro";
            $this->logAcesso($login, "Tentativa de acesso não autorizado.");
            echo "<script>
                window.location.href = './';
                </script>";
            exit;
        }
    }

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
