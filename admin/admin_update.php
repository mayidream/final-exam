<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理员信息修改页面</title>
    <link rel="stylesheet" href="./layui/css/layui.css">
    <script src="./layui/layui.js"></script>
    <style>
        table {
            width: 500px;
            margin: 200px auto;
            border-collapse: collapse;
            text-align: center;
        }

        td,
        th {
            border: 1px solid #333;
        }

        thead tr {
            height: 40px;
            background-color: #ccc;
        }
    </style>
</head>
<body>
<?php
require_once 'autoload.php';

session_start();
$ad_id=@$_GET['ad_id'];
$mysql=new Db('admin');
$link=$mysql->link;
$sql="select * from admin where ad_id=$ad_id ";
$result=mysqli_query($link,$sql);
$results=@mysqli_fetch_assoc($result);
?>
<form class="layui-form" method="post" style="margin: 20px 500px"  action="./admin_update2.php?ad_id=<?php echo $ad_id?>">
    <div class="layui-form-item">
        <label class="layui-form-label">用户名:</label>
        <div class="layui-input-inline">
            <input type="text" value="<?php echo $results['ad_uname'] ?>" name="uname" required lay-verify="required" placeholder="请输入用户名" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux" ><font color="red"><?php if ($_SESSION['error']){echo $_SESSION['error'];}else echo '*为必填项'?></font> </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">密码:</label>
        <div class="layui-input-inline">
            <input type="password"  name="password" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux" ><font color="red"> *为必填项</font></div>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
    <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
    <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>
</form>
<script>
    //Demo
    layui.use('form', function(){
        var form = layui.form;


    });
</script>
</body>
</html>