<?php

session_start();

unset($_SESSION["SessionId"]);
unset($_SESSION["login"]);
unset($_SESSION["usuario"]);
unset($_SESSION["usuario_id"]);
unset($_SESSION["nivel"]);
unset($_SESSION["nome"]);

header("Location:../../");
?>