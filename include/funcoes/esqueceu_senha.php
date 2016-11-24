<?php
include "config.php"; //inclui o arquivo de configurações

$db   = mysql_connect ($host, $login_db, $senha_db); //conecta ao mysql
$basedados      =       mysql_select_db($database); //conecta a base de dados

$confirmacao = mysql_query("SELECT * FROM '$tabela' WHERE login = '$login' AND email = '$email'", $db); //verifica se o login e a email conferem
  while ($row = mysql_fetch_array($confirmacao)) {
        $login = $row["login"]; //adiciona a variavel $login o login do usuario
        $senha = $row["senha"]; //adiciona a variavel $senha a senha do usuario
        $email = $row["email"]; //adiciona a variavel $email o email do usuario
        }

$contagem = mysql_num_rows($confirmacao); //traz o resultado da pesquisa acima

if ( $contagem == 1 ) {
  $msg  = "Recuperação de senha" . chr(13) . chr(10);
  $msg .= "Senha enviada em " . date("d/m/Y") . ", os dados seguem abaixo: " . chr(13) . chr(10) . chr(10);
  $msg .= "Login : " . $login . chr(13) . chr(10);
  $msg .= "Email : " . $email . chr(13) . chr(10);
  $msg .= "Senha : " . $senha . chr(13) . chr(10);

  $Remetente = "endereco@provedor.com.br"; //remetente do email, coloque o email do seu site

  mail($email, "Recuperação de Senha",$msg,"From: $Remetente\n"); //campos do email na ordem, email destinho (não deve ser alterada), assunto, conteudo (não deve ser alterado), remetente (também não altere)

  echo "<div align=center><font size=2 face=Verdana, Arial, Helvetica, sans-serif>Sua senha foi enviada com sucesso para o email: $email.</font></div>"; //resposta se o email foi enviado com sucesso
  } else {
        echo "<div align=center><font size=2 face=Verdana, Arial, Helvetica, sans-serif>Seu login ou email está incorreto.</font></div>"; //resposta se não foi possivel enviar o email
        }
?>