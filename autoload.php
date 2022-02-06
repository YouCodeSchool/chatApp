<?php

// use JetBrains\PhpStorm\ExpectedValues;

spl_autoload_register("autoLoader");
    function autoLoader($className){
        $paths = array(
            'Db/',
            'classes/',
            'models/',
            'views/',
            'controllers/',
            'userImage/',
        );
        $extention = explode('\\', $className);
        $name = array_pop($extention);
    
        foreach($paths as $path){
            $file = sprintf($path."%s.php",$name);
            if(is_file($file)){
                include_once $file;
            }
        }


    }


?>