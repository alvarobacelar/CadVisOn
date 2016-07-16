<?php
//This project is done by vamapaull: http://blog.vamapaull.com/

if(isset($GLOBALS["HTTP_RAW_POST_DATA"])){
        session_start();
	$jpg = $GLOBALS["HTTP_RAW_POST_DATA"];
	$img = $_GET["img"];
	$filename = "images/poza_". mktime(). ".jpg";
	file_put_contents($filename, $jpg);
        
        $_SESSION["filename"] = $filename;
        
} else{
	echo "Encoded JPEG information not received.";
}
?>