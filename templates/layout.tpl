<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title> {$titulo|capitalize} </title>

        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />

        <!-- PHOTO_BOOTH -->
        <meta name="description" content="Webcam Photo Booth made with ActionScript 3" />
        <meta name="keywords" content="photo, photo booth, image, flash, actionscript," />

        {* bootstrap *}
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet"> {* layout responsive *}
        <link href="lib/bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
        {* bootstrap *}

        <link rel="stylesheet" href="css/layout_.css" />
        <link rel="stylesheet" href="css/login_.css" />
        <link rel="stylesheet" href="css/geral_.css" />
        <link rel="stylesheet" href="css/cad_visitante_.css" />
        <link rel="stylesheet" href="css/admin_.css" />

        <script src="lib/photo_booth/swfobject.js" language="javascript"></script> <!-- SCRIPT DO PHOTO_BOOTH -->

        <link rel="SHORTCUT ICON" href="img/img-nav.jpg" />

        <!--[if IE 6]>  
            <script>
                alert (Utilize outro navegador);
            </script>
        <![endif]--> 


    </head>

    <body>


        {* CASO A LAYOUT FOR CHAMADO POR FALE CONOSCO, NÃO APARECERÁ OS MENUS *}
        {if isset ($menu)}

            {* COMPARAÇÃO DE USUARIO--*}
            {if $menu == "Administrador"}

                <div class="navbar navbar-default navbar-static-top" role="navigation">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" title="Home" href="index.php"><strong><span class="glyphicon glyphicon-home"></span> CadVisiOn</strong> <span style="font-size: 10px;"><mark>Beta</mark></span></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gerenciar Usuários <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="cadastra_novo.php" title="Cadastrar Novo Usuário"> Novo Usuário </a></li>
                                        <li><a href="log_acesso.php" title="Cadastrar Novo Usuário"> Log de Acesso </a></li>
                                    </ul>
                                </li>
                                <li><a href="cad_visita.php" title="Cadastrar Visitante"> Cadastrar Hospedagem </a></li>
                                <li><a href="pessoas_cadastradas.php" title="Pessoas Cadastradas"> Hospedes Cadastradas </a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Relatorios de Hospedagem <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="gerarRelatorios.php?rel=diario" target="_blanck">Relatório Diário </a></li>
                                        <li><a href="gerarRelatorios.php?rel=data"> Por Data </a></li>
                                        <li><a href="gerarRelatorios.php?rel=nome"> Por Nome do Hospede</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- MENU NA DIREITA
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Link</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </li>
                            </ul>
                            -->
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>

            </div>
            <!--

            
                <div id="container navbar-wrapper">
                    <div class="navbar navbar-inverse">
                        <div class="navbar-inner">
                            <ul class="nav">
            {* criando menu dropdown *}
            <a class="brand" title="Home" href="index.php">
                <i class="icon-home icon-white"></i> <b> Home </b>
            </a>
            <li><a href="cadastra_novo.php" title="Cerecnciar Contas"> Gerenciar Contas </a></li>
            <li><a href="cad_visitado.php" title="Cadastrar Militar"> Cadastrar Militar </a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Relatórios de Visita
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="gerarRelatorios.php?rel=diario" target="_blanck"> Diário </a></li>
                    <li><a href="gerarRelatorios.php?rel=data"> Por Data </a></li>
                    <li><a href="gerarRelatorios.php?rel=nome"> Por Nome do Visitante</a></li>
                    <li><a href="gerarRelatorios.php?rel=visitado"> Por Nome do Visitado </a></li>
                </ul>
            </li>
            <li><a href="cad_visita.php" title="Cadastrar Visitante"> Cadastrar Visita </a></li>
            <li><a href="pessoas_cadastradas.php" title="Pessoas Cadastradas"> Pessoas Cadastradas </a></li>
        </ul>
            {*fim do menu dropdown*}
        </div> {* #navbar inner*}
    </div> {* #navbar *}
</div> {* #container *}
</div> {* #menu-prin *}

            -->

        {/if}


        {if $menu == "Usuario"}
            {* links do menu do usuario *}


            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" title="Home" href="index.php"><strong><span class="glyphicon glyphicon-home"></span> CadVisiOn</strong> <span style="font-size: 10px;"><mark>Beta</mark></span></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <!-- OPÇÕES DE MENU -->
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>


            <!--
            <div id="menu-prin">
                <div id="container navbar-wrapper">
                    <div class="navbar navbar-inverse">
                        <div class="navbar-inner">
                            <ul class="nav">
            {* criando menu dropdown *}
            <a class="brand" title="Home" href="index.php">
                <i class="icon-home icon-white"></i><b> Home </b>
            </a>

            <li><a href="#" title="Cadastrados"> Relação de Cadastrados </a></li>
        </ul>
            {* fim do menu dropdown *}
        </div> {* #navbar inner *}
    </div> {* #navbar *}
</div> {* #container *}
</div> {* #menu-prin *}
            -->
        {/if}


        {if $menu == "Supervisor"}
            {* links do menu do supervisor *}



            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" title="Home" href="index.php"><strong><span class="glyphicon glyphicon-home"></span> CadVisiOn</strong> <span style="font-size: 10px;"><mark>Beta</mark></span></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="cad_visita.php" title="Cadastrar Visitante"><strong> Cadastrar Hospedagem </strong></a></li>
                            <li><a href="pessoas_cadastradas.php" title="Pessoas Cadastradas"> Hospedes Cadastradas </a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Relatorios de Hospedagem <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="gerarRelatorios.php?rel=diario" target="_blanck">Relatório Diário</a></li>
                                    <li><a href="gerarRelatorios.php?rel=data"> Por Data </a></li>
                                    <li><a href="gerarRelatorios.php?rel=nome"> Por Nome do Hospede</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- MENU NA DIREITA
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Link</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                        -->
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>



            <!--
            <div id="menu-prin">
                <div id="container navbar-wrapper">
                    <div class="navbar navbar-inverse">
                        <div class="navbar-inner">
                            <ul class="nav">
            {* criando menu dropdown *}
            <a class="brand" href="index.php" title="Home">
                <i class="icon-home icon-white"></i><b> Home </b>
            </a>
            <li><a href="cad_visita.php" title="Cadastrar Visita"> <b>Cadastrar Visita</b> </a></li>
            <li><a href="cad_visitado.php" title="Cadastrar Militar"> Cadastrar Militar </a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Relatórios de Visita
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="gerarRelatorios.php?rel=diario" target="_blanck"> Diário </a></li>
                    <li><a href="gerarRelatorios.php?rel=data"> Por Data </a></li>
                    <li><a href="gerarRelatorios.php?rel=nome"> Por Nome do Visitante</a></li>
                    <li><a href="gerarRelatorios.php?rel=visitado"> Por Nome do Visitado </a></li>
                </ul>
            </li>
        </ul>
            {* fim do menu dropdown *}
        </div> {* #navbar inner *}
    </div> {* #navbar *}
</div> {* #container *}
</div> {* #menu-prin *}
            -->


        {/if}
    {/if} {* FIM DA CONDIÇÃO DE VERIFICAÇÃO DE MENU *}

        <div id="tudo">

            {if $local != ""}
                <div id="status">Voce está em: {$local} </div>
            {/if}

            {if isset ($login)}
                {* mostra o nome do usuraio logado *}
                <div id="logado"><span class="glyphicon glyphicon-user"></span> Seja bem vindo, <span class="login"> {$login} </span> <a class="btn btn-danger btn-xs" href="include/funcoes/logaut.php"><span class="glyphicon glyphicon-off"></span> Sair</a></div>
            {/if}


            <div id="conteudo">
                {include file=$conteudo} {* TODO O CONTEUDO DO SISTEMA FICARÁ DENTRO DESSA DIV *}
            </div>

            <div id="clear"></div> {* separa a div tudo *}

        </div> {* #tudo *}


        <div id="rodapeHome">
            © Pensão Genivaldo Geni - (Carreirinha) 
            <p>
                Desenvolvido por - <a href="http://www.alvarobacelar.com" target="_blank">Álvaro Bacelar</a><br>
                Versão 2.0.1
            </p>
        </div>

        <script src="bootstrap/js/jquery-latest.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- JQUERY -->

        <script src="script/valida.js" type="text/ecmascript">  </script>
        <script src="script/ajax_cam.js" type="text/ecmascript">  </script>
        <script src="script/valida_admin.js" type="text/ecmascript">  </script>
        <script src="script/jQuery/jquery-1.8.3.min.js" type="text/ecmascript">  </script>
        <script src="script/jQuery/jquery.js" type="text/ecmascript">  </script>
        <script src="script/jQuery/ajax.js" type="text/ecmascript">  </script>
        <script src="script/jQuery/jquery.maskedinput.min.js" type="text/ecmascript">  </script>

    </body>
</html>
