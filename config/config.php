<?php

$root = $_SERVER['DOCUMENT_ROOT'];


define('SMARTY_DIR', str_replace("\\", "/", getcwd()) . '/smarty/');
define("TEMPLATE", "");
define("SERVIDOR", "258276");
require_once(SMARTY_DIR . 'Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = str_replace("\\", "/", getcwd()) . "/templates/" . TEMPLATE;
$smarty->compile_dir = str_replace("\\", "/", getcwd()) . "/templates_c/";
$smarty->config_dir = str_replace("\\", "/", getcwd()) . "/smarty/setup/";
$smarty->cache_dir = str_replace("\\", "/", getcwd()) . "/smarty/cache/";

//if ($root == "C:/wamp/www/") {
//
//    define("SERVIDOR", "");
//    define("SMARTY_DIR", $root . "\\cadvision\\smarty\\");
//    define("SITE", $root . "\\cadvision\\");
//    define("TEMPLATE", "");
//    define('BASE_URL', '/');
//    //define('HTTP_URL', 'http://127.0.0.1/cadvision/');
//    include(SMARTY_DIR . "Smarty.class.php");
//    $smarty = new Smarty;
//    $smarty->template_dir = SITE . "templates\\" . TEMPLATE;
//    $smarty->compile_dir = SITE . "templates_c\\";
//    
//} else {
//    define("SERVIDOR", "25bc");
//    define("SMARTY_DIR", $root . "/smarty/");
//    define("SITE", $root . "/");
//    define("TEMPLATE", "");
//    define('BASE_URL', '/');
//    //define('HTTP_URL', 'http://127.0.0.1/cadvision/');
//    include(SMARTY_DIR . "Smarty.class.php");
//    $smarty = new Smarty;
//    $smarty->template_dir = SITE . "templates\\" . TEMPLATE;
//    $smarty->compile_dir = SITE . "templates_c\\";
//    
//}
//
//
//
