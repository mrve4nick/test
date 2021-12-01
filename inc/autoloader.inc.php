<?php
    spl_autoload_register("myAutoLoader");
    function myAutoLoader($className) {
        $path = __DIR__ . "/../src/classes/";
        $ext = ".class.php";
        $fullPath = $path . $className . $ext;
        include_once $fullPath;
    }