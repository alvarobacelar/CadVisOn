<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title> {$titulo} </title>

        {* bootstrap *}
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet"> <!-- layout responsive -->
        <link href="lib/bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
        {* Bootstrap *}

        <link rel="stylesheet" href="css/login_.css" />
        <link rel="stylesheet" href="css/geral_.css" />
        <link rel="stylesheet" href="css/layout_.css" />
        <script src="script/valida_admin.js" type="text/ecmascript">  </script>

        <link rel="SHORTCUT ICON" href="img/img-nav.jpg" />

    </head>
    <body>

        <div class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><strong>CadVisiOn</strong> <span style="font-size: 10px;"><mark>Beta</mark></span></a>
                    <p class="navbar-text">Cadastro de Visitantes Online</p>   
                </div>

            </div><!--/.nav-collapse -->
        </div>
        <!--
        <div id="topo-log">
            <div id="cabecalho"><a href="/cadvision"> <img src="img/logo.png" /> </a>
                <span id="span_cabecalho"> Cadastro de Visitantes Online </span>
            </div>
        </div>
        -->
        

        <!-- ################CONTEUDO GERAL################## -->
        <div class="container">

        {include file=$conteudoLogin} 
        ﻿
        </div>
        <!--################FIM DO CONTEÚDO GERAL##############-->        

        <div id="clear"></div>
        <div id="rodape2">
            © CadVisiOn - Cadastro de Visitantes Online |  <a href="#"> Politica de Privacidade </a> | <a href="#"> Termo de Uso </a> | <a href="fale_conosco.php"> Fale Conosco </a>
            <p>
                Desenvolvido por - <a href="http://www.alvarobacelar.com" target="_blank">Sgt Álvaro</a> | Seção de Informática 25ºBC<br>
                Versão 2.0
            </p>
        </div>

        <script src="bootstrap/jquery-latest.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="script/jQuery/jquery-1.8.3.min.js" type="text/ecmascript">  </script>
        <script src="script/jQuery/jquery.js" type="text/ecmascript">  </script>
        <script src="script/jQuery/ajax.js" type="text/ecmascript">  </script>
        <script src="script/jQuery/jquery.maskedinput.min.js" type="text/ecmascript">  </script>

    </body>

</html>