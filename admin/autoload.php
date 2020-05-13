<?php
spl_autoload_register(function ($ClassName){
    $filename="./lib/$ClassName.class.php";
       if (file_exists($filename)) {
           require_once $filename;
       } 123
});
//$mysql=new Db('admin');