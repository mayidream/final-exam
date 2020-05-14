<?php
require_once 'config.php';
//分页参数，每页显示多少条
$pagesize=1;
//获取当前页面和计算开始行号
$page=isset($_GET['page'])? $_GET['page']:1;
//开始行号
$startrow=($page-1)*$pagesize;
//构建查询的分页的sql语句
$sql="SELECT * FROM students ORDER BY id ASC ";
//获取总记录数和计算总页数
$result=mysqli_query($link,$sql);
$records=mysqli_num_rows($result);
$pages=ceil($records/$pagesize);
$sql.="LIMIT {$startrow},{$pagesize}";
$result=mysqli_query($link,$sql);
$arrs=mysqli_fetch_all($result,MYSQLI_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>数据分页</title>
    <style type="text/css">
        .pagelist a{
            padding: 3px 5px;
            text-decoration: none;
            margin: 0px 3px;
            border: 1px solid #ccc;
        }
        .pagelist span{
            padding: 3px 8px;
        }
    </style>
</head>
<body>
<table border="1" style="text-align: center">
    <tr>
        <th>id</th>
        <th>用户名</th>
        <th>密码</th>
        <th>权限</th>
        <th>price</th>
    </tr>
        <?php
        foreach ($arrs as $arr)
        { ?>
            <tr>
                <td><?php echo $arr['id'] ?></td>
                <td><?php echo $arr['uname'] ?></td>
                <td><?php echo $arr['upass'] ?></td>
                <td><?php echo $arr['type'] ?></td>
                <td><?php echo $arr['price'] ?></td>
            </tr>

        <?php } ?>
        <tr >
            <td  colspan="5" align="center" height="50px" class="pagelist">
                <?php
                    //当前页
                    $start=$page-5;
                    $end=$page+5;
                    if ($page<=6){
                        $start=1;
                        $end=10;
                    }
                    if ($page>=$pages-4)
                    {
                        $start=$pages-9;
                        $end=$pages;
                    }
                    if ($pages<10)
                    {
                        $start=1;
                        $end=$pages;
                    }
                    //循环输出所有页码
                    for ($i=$start;$i<=$end;$i++){
                        //当前页不加链接
                        if ($page==$i){
                            echo "<span>$i</span>";
                        }else{
                            echo "<a href='?page=$i'>$i</a>";
                        }

                    }
                ?>
            </td>
        </tr>
</table>
</body>
</html>
