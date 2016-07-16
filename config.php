<?php

$root = $_SERVER['DOCUMENT_ROOT'];


if ($root == "C:/wamp/www/") {

    define("SERVIDOR", "");
    define("SMARTY_DIR", $root . "\\cadvision\\smarty\\");
    define("SITE", $root . "\\cadvision\\");
    define("TEMPLATE", "");
    define('BASE_URL', '/');
    //define('HTTP_URL', 'http://127.0.0.1/cadvision/');
    include(SMARTY_DIR . "Smarty.class.php");
    $smarty = new Smarty;
    $smarty->template_dir = SITE . "templates\\" . TEMPLATE;
    $smarty->compile_dir = SITE . "templates_c\\";
    
} else {

    define("SERVIDOR", "25bc");
    define("SMARTY_DIR", $root . "/smarty/");
    define("SITE", $root . "/");
    define("TEMPLATE", "");
    define('BASE_URL', '/');
    //define('HTTP_URL', 'http://127.0.0.1/cadvision/');
    include(SMARTY_DIR . "Smarty.class.php");
    $smarty = new Smarty;
    $smarty->template_dir = SITE . "templates\\" . TEMPLATE;
    $smarty->compile_dir = SITE . "templates_c\\";
    
}



