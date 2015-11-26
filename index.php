<?php
    include("controller\config\config.php");
    include("controller\AppMysql.php");
    $class = dir("controller");
    while($file = $class->read()){
        if(strpos($file , "class") > 0){
            include("controller\\$file");
        }
    }
    //Route
    new Routes($_GET);
