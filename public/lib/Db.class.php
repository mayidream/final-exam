<?php
class Db
{
    //数据库连接地址
    private $host;
    //数据库密码
    private $pwd;
    //数据库用户名
    private $user;
    //要操作的表
    public $tableName;
    //要操作的数据库名
    private $dbname;
    //数据库连接资源
    public $link = null;
    //字符集
    private $charset;
    //使用单例设计模式
    private static $obj=null;
    //第一次初始化数据库配置
    function __construct($tableName = '')
    {
        $this->tableName=$tableName;
        $this->host = 'localhost';
        $this->user = 'root';
        $this->pwd = 'root';
        $this->charset = 'utf8';
        $this->dbname = 'riches';
        $this->link=$this->connection();
    }
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    //连接数据库
    private function connection()
    {
        //连接数据库
        $link=@mysqli_connect($this->host,$this->user,$this->pwd,$this->dbname);
        //设置字符集
        mysqli_set_charset($link,$this->charset);
        //判断
        if(!$link){
            return '数据库连接失败';
        }else{
            echo '数据库连接成功';
        }
        //返回结果
        return $link;
    }

    //关闭数据库
     function __destruct()
    {
            mysqli_close($this->link);
    }
}
