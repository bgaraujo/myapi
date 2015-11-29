<?php
    include("controller\config\config.php");
    
    include("controller\AppMysql.php");

    $paths = array("model","controller");
    foreach ($paths as $path) {
        $class = dir($path);
        while($file = $class->read()){
            if(strpos($file , "class") > 0){
                include("$path\\$file");
            }
        }
    }
    //Route
    new Routes($_GET);
