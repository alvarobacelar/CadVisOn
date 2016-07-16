<?php /* Smarty version Smarty-3.1.13, created on 2015-05-07 16:13:03
         compiled from "/home/www/html/cadvision/templates/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7833110845539a3a407c979-53106353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e1b748d808141226aed56894d0a66f18212e5ed' => 
    array (
      0 => '/home/www/html/cadvision/templates/layout.tpl',
      1 => 1430848863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7833110845539a3a407c979-53106353',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5539a3a40c3276_95265684',
  'variables' => 
  array (
    'titulo' => 0,
    'menu' => 0,
    'local' => 0,
    'login' => 0,
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5539a3a40c3276_95265684')) {function content_5539a3a40c3276_95265684($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/home/www/html/cadvision/smarty/plugins/modifier.capitalize.php';
?><!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title> <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['titulo']->value);?>
 </title>

        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />

        <!-- PHOTO_BOOTH -->
        <meta name="description" content="Webcam Photo Booth made with ActionScript 3" />
        <meta name="keywords" content="photo, photo booth, image, flash, actionscript," />

        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet"> 
        <link href="lib/bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
        

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


        
        <?php if (isset($_smarty_tpl->tpl_vars['menu']->value)){?>

            
            <?php if ($_smarty_tpl->tpl_vars['menu']->value=="Administrador"){?>

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
                                <li><a href="cad_visitado.php" title="Cadastrar Militar"> Cadastrar Militar </a></li>
                                <li><a href="cad_visita.php" title="Cadastrar Visitante"> Cadastrar Visita </a></li>
                                <li><a href="pessoas_cadastradas.php" title="Pessoas Cadastradas"> Pessoas Cadastradas </a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Relatorios de visita <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="gerarRelatorios.php?rel=diario" target="_blanck">Relatório Diário </a></li>
                                        <li><a href="gerarRelatorios.php?rel=data"> Por Data </a></li>
                                        <li><a href="gerarRelatorios.php?rel=nome"> Por Nome do Visitante</a></li>
                                        <li><a href="gerarRelatorios.php?rel=visitado"> Por Nome do Visitado </a></li>
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
            
        </div> 
    </div> 
</div> 
</div> 

            -->

        <?php }?>


        <?php if ($_smarty_tpl->tpl_vars['menu']->value=="Usuario"){?>
            


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
            
            <a class="brand" title="Home" href="index.php">
                <i class="icon-home icon-white"></i><b> Home </b>
            </a>

            <li><a href="#" title="Cadastrados"> Relação de Cadastrados </a></li>
        </ul>
            
        </div> 
    </div> 
</div> 
</div> 
            -->
        <?php }?>


        <?php if ($_smarty_tpl->tpl_vars['menu']->value=="Supervisor"){?>
            



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
                            <li><a href="cad_visita.php" title="Cadastrar Visitante"><strong> Cadastrar Visita </strong></a></li>
                            <li><a href="pessoas_cadastradas.php" title="Pessoas Cadastradas"> Pessoas Cadastradas </a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Relatorios de visita <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="gerarRelatorios.php?rel=diario" target="_blanck">Relatório Diário </a></li>
                                    <li><a href="gerarRelatorios.php?rel=data"> Por Data </a></li>
                                    <li><a href="gerarRelatorios.php?rel=nome"> Por Nome do Visitante</a></li>
                                    <li><a href="gerarRelatorios.php?rel=visitado"> Por Nome do Visitado </a></li>
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
            
        </div> 
    </div> 
</div> 
</div> 
            -->


        <?php }?>
    <?php }?> 

        <div id="tudo">

            <?php if ($_smarty_tpl->tpl_vars['local']->value!=''){?>
                <div id="status">Voce está em: <?php echo $_smarty_tpl->tpl_vars['local']->value;?>
 </div>
            <?php }?>

            <?php if (isset($_smarty_tpl->tpl_vars['login']->value)){?>
                
                <div id="logado"><span class="glyphicon glyphicon-user"></span> Seja bem vindo, <span class="login"> <?php echo $_smarty_tpl->tpl_vars['login']->value;?>
 </span> <a class="btn btn-danger btn-xs" href="include/funcoes/logaut.php"><span class="glyphicon glyphicon-off"></span> Sair</a></div>
            <?php }?>


            <div id="conteudo">
                <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['conteudo']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
            </div>

            <div id="clear"></div> 

        </div> 


        <div id="rodapeHome">
            © CadVisiOn - Cadastro de Visitantes Online |  <a href="#"> Politica de Privacidade </a> | <a href="#"> Termo de Uso </a> | <a href="fale_conosco.php"> Fale Conosco </a>
            <p>
                Desenvolvido por - <a href="http://www.alvarobacelar.com" target="_blank">Sgt Álvaro</a> | Seção de Informática 25ºBC<br>
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
<?php }} ?>