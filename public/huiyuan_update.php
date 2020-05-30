<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>会员信息修改页面</title>
    <link rel="stylesheet" href="./layui/css/layui.css">
    <script src="./layui/layui.js"></script>

</head>
<body>
<?php
require_once 'autoload.php';

session_start();
$user_id=@$_GET['user_id'];
$mysql=new Db('user');
$link=$mysql->link;
$sql="select * from user where user_id='$user_id' ";
$result=mysqli_query($link,$sql);
$results=@mysqli_fetch_assoc($result);
?>
<form class="layui-form" method="post" style="margin: 20px 500px"  action="huiyuan_update2.php?user_id=<?php echo $user_id ?>">

    <div class="layui-form-item">
        <label class="layui-form-label">电话号码：</label>
        <div class="layui-input-inline">
            <input type="tel" value="<?php echo $results['telphone']; ?>" name="telphone" required lay-verify="required" placeholder="请输入电话号码" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux" ><font color="red">*如不更改则不变</font> </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">密码：</label>
        <div class="layui-input-inline">
            <input type="password" value="<?php echo $results['upass'] ?>" name="upass" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux" ><font color="red">*如不更改则不变</font> </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">收货地址：</label>
        <div class="layui-input-inline">
            <input type="text" value="<?php echo $results['address'] ?>" name="address" required lay-verify="required" placeholder="请输入收货地址" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux" ><font color="red">*如不更改则不变</font> </div>
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