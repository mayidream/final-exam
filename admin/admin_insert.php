<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加管理员</title>
    <link rel="stylesheet" href="./layui/css/layui.css">
    <script src="./layui/layui.js"></script>
</head>
<body>
<?php
session_start();
?>
<form class="layui-form" method="post" style="margin: 20px 500px"  action="./admin_insert2.php">
    <div class="layui-form-item">
        <label class="layui-form-label">管理员名:</label>
        <div class="layui-input-inline">
            <input type="text"  name="uname" required lay-verify="required" placeholder="请输入用户名" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux" ><font color="red"><?php if ($_SESSION['error']){echo $_SESSION['error'];}?></font> </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">密码:</label>
        <div class="layui-input-inline">
            <input type="password"  name="password" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux" ><font color="red"> *为必填项</font></div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">确认密码:</label>
        <div class="layui-input-inline">
            <input type="password"  name="repassword" required lay-verify="required" placeholder="请再次输入密码" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux" ><font color="red"> *为必填项</font></div>
    </div>
    <div class="layui-form-item" style="width: 300px">
        <label class="layui-form-label" >管理员权限</label>
        <div class="layui-input-block">
            <select name="type" lay-verify="required" >
                <option value=""></option>
                <option value="1">网站管理员</option>
                <option value="2">产品经理</option>
            </select>
        </div>
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