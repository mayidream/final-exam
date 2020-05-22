<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>会员列表</title>
    <link rel="stylesheet" href="./layui/css/layui.css">
    <script src="layui/layui.js"></script>
</head>
<body>
<?php
require_once 'autoload.php';
$mysql=new Db('user');
$link=$mysql->link;
$pagesize=1;
//得到当前页数
$pages=isset($_GET['page']) ? $_GET['page']:1;
//得到开始行号
$startrow=($pages-1)*$pagesize;
//获取总记录数
$sql="SELECT * FROM user";
$result=mysqli_query($link,$sql);
$record= mysqli_num_rows($result);
//获取总页数
$ye_shu=ceil($record/$pagesize);
//构建分页sql语句
$sql.=" limit $startrow,$pagesize";
$result=mysqli_query($link,$sql);
?>
<div class="layui-btn layui-btn-normal" style="margin-top: 20px"><a style="color: #fff;" href="index.php"> 返回后台首页</a></div>
<table class="layui-table">
    <colgroup>
        <col width="150">
        <col width="200">
        <col>
    </colgroup>
    <thead>
    <tr>
        <th>用户id</th>
        <th>用户名</th>
        <th>电话号码</th>
        <th>创建时间</th>
        <th>更新时间</th>
        <th>收货地址</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    <?php
    date_default_timezone_set("Asia/Shanghai");
    while ($results=mysqli_fetch_assoc($result)){

        ?>
        <tr>
            <td><?php echo $results['user_id'] ?></td>
            <td><?php echo $results['uname'] ?></td>
            <td><?php echo $results['telphone'] ?></td>
            <td><?php if ($results['create_time']){echo  date('Y-m-d',$results['create_time']);}   ?></td>
            <td><?php if ($results['update_time']) { echo date('Y-m-d',$results['update_time']);} ?></td>
            <td><?php echo $results['address']?></td>
            <td><div class="layui-btn layui-btn-warm"><a style="color:#fff" href="member_update.php?user_id=<?php  echo $results['user_id'] ?>">修改</a></div>  <div class="layui-btn layui-btn-danger"><a class="delete" style="color: #fff"  href="member_delete.php?user_id=<?php echo $results['user_id']?>"> 删除</a></div> </td>
        </tr>
    <?php  } ?>
    </tbody>
    <tr >
        <td colspan="9" style="text-align: center;height: 30px" ><a href="?page=<?php if ($pages==1){echo 1;}else{echo $pages-1;}   ?>"> 上一页</a>
            <?php
            //循环输出页码
            for ($i=1;$i<=$ye_shu;$i++){
                //当前页不加链接
                if ($pages==$i){
                    echo "<span>&nbsp;&nbsp; &nbsp;$i</span>";
                }else{
                    echo "<a href='?page=$i' style='color: red'>&nbsp;&nbsp; &nbsp; $i</a>";
                }
            }
            ?> &nbsp;&nbsp; &nbsp;<a href="?page=<?php if ($pages==$ye_shu){echo $ye_shu;}else{echo $pages+1;}   ?>">下一页</a>
        </td>
    </tr>
</table>

</body>
</html>
