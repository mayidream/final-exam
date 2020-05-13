<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理员登录页面</title>
    <link rel="stylesheet" href="./css/font.css">
    <link rel="stylesheet" href="./css/xadmin.css">
    <script src="./layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js/xadmin.js"></script>
</head>
<body class="login-bg">
<!-- php代码处理区域-->
<?php
    session_start();
    if (!@$_SESSION['_token']){
        $_SESSION['_token']= md5('str'.time());
    }
?>

<!-- php代码结束区域-->
<div class="login layui-anim layui-anim-up">
    <div class="message">悠游网管理员登录</div>
    <div id="darkbannerwrap"></div>
    <?php if (@$_SESSION['error']!=''){
        echo $_SESSION['error'];
    } ?>
    <form method="post" class="layui-form" action="verifyController.php">
        <input name="username" placeholder="用户名"  type="text" lay-verify="required" class="layui-input" >
        <hr class="hr15">
        <input name="password" lay-verify="required" placeholder="密码"  type="password" class="layui-input">
        <hr class="hr15">
        <input type="hidden" name="_token" value="<?php echo $_SESSION['_token'] ?>">
        <hr class="hr15">
        <input value="登录" lay-submit lay-filter="login" style="width:100%;" name="submit" type="submit">
        <hr class="hr20" >
    </form>
</div>

<script>
    layui.use('form', function(){
        var form = layui.form;
    });
</script>
<!-- 底部结束 -->

</body>
</html>
