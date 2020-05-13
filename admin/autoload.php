<?php
spl_autoload_register(function ($ClassName){
    $filename="./lib/$ClassName.class.php";
       if (file_exists($filename)) {
           require_once $filename;
       } 113
});
//$mysql=new Db('admin');