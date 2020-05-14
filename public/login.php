<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录页面</title>
<!--    导航栏css样式  勿动-->
    <link rel="stylesheet" href="./layui/css/layui.css">
    <script src="./layui/layui.js"></script>
    <link rel="stylesheet" href="./layui/css/daohang.css">
    <!--    导航栏css样式  勿动-->
    <link rel="stylesheet" href="css/login.css">

</head>
<body>
<!--当导航栏开始-->
<div class="header">
<ul class="layui-nav" lay-filter="">
    <li class="sign"><a href=""><img src="./images/logo.png" width="100px" height="50px"></a></li>
    <li class="layui-nav-item "><a href="">首页</a></li>
    <li class="layui-nav-item "><a href="">U定制</a></li>
    <li class="layui-nav-item"><a href="">我的客栈</a></li>
    <li class="layui-nav-item"><a href="">旅游攻略</a></li>
    <li class="layui-nav-item"><a href="">会员中心</a></li>
    <li class="layui-nav-item" style="margin-left: 20px ; margin-right: 20px"><a href=""><img src="images/购物车.png" width="20px" height="20px"></a></li>

    <li class="sign" style="list-style: none"><a href="">登录</a> |<a href="">&nbsp;注册</a> </li>
<!--    <li class="layui-nav-item">-->
<!--        <a href=""><img src="//t.cn/RCzsdCq" class="layui-nav-img">我</a>-->
<!--        <dl class="layui-nav-child">-->
<!--            <dd><a href="javascript:;">修改信息</a></dd>-->
<!--            <dd><a href="javascript:;">安全管理</a></dd>-->
<!--            <dd><a href="javascript:;">退出登录</a></dd>-->
<!--        </dl>-->
<!--    </li>-->
</ul>
</div>
<!--当导航栏结束-->
<div id="zong"><!--总布局（去除导航栏） -->

<div id="zhong"><!--登录主体 -->

<div id="left"><!-- 账号登陆-->
<div style="height:60px;width:800px"></div><!--为了与导航栏中间留空 -->

<div id="fu"><!--主要内容 -->
<div style="height:20px;width:350px"></div><!--留空 -->
<!--左侧登录 -->
<div id="aa" style="width: 270px; height: 20px; float: left; font-family: '微软雅黑';" >
<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">悠游网账号登录</a></strong></div>
<div id="bb" style="width: 80px; height: 20px; float: right; font-family: '微软雅黑'; font-size: 10px;" >
  <a href="#">手机号查单&nbsp;></a></div>
<div style="height:55px;width:350px"></div><!--留空 -->

<div class="cc">
    <div class="warm" style="margin-left: 30px; color: red">
    <!--错误信息提示开始-->
    <?php
    session_start();
    if (@$_SESSION['error']){
        echo $_SESSION['error'];
    } ?>
    <!--错误信息提示结束-->
    </div>
    <!--php处理程序开始-->
    <?php

    if (!@$_SESSION['_token']) {
        $_SESSION['_token'] = md5('str' . time());
    }
    ?>
    <!--php处理程序结束-->
<form action="./verifyController.php" method="post">
<div class="username"><input class="userInp" type="text" name="username" placeholder="请输入用户名"/></div>
<div style="height:8px;width:350px"></div><!--留空 -->
<div class="pwd"><input class="pwdInp" name="password" type="password" placeholder="请输入密码"/></div>
<input type="hidden" name="_token" value="<?php echo $_SESSION['_token'] ?>">
<div style="width:300px"><!--验证码 -->
<div class="yz"><input class="yzm" type="text" name="verify" placeholder="验证码"/></div>
<div class="y"> <img src="useVcode.php" onclick="this.src='useVcode.php?'+Math.random()" style="float: right"></div>
</div><!--验证码 -->

<div class="forgetPwd"><a class="forgetLink" href="#" target="" style="color: red">忘记密码?</a></div>
<input type="submit" name="submit" value="登录"  class="btn">
</form>
</div><!--cc --> 
<div style="text-align: center; margin-top: 240px; font-size: 12px; font-family: '微软雅黑'; color: #999;">
    <br>
    登录即代表您同意我们的<strong><a href="" style="color: red">服务协议</a> </strong>和<strong><a href="" style="color: red">隐私政策</a></strong>
</div>
<div style="text-align:center; margin-top:18px"><a href="#"><img src="images/zf.png" width="40"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="images/bd.png" width="40"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="images/wx.png" width="40"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="images/wb.png" width="40"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="images/QQ.png" width="40"></a></div>

</div><!--fu -->

</div><!--left -->

<div id="right"><!-- 右侧-->
<div style="height:60px"></div><!--为了与导航栏中间留空 -->
<!--扫码登录 -->
<div style=" width:30px;background-color: #C96; text-align:center;"><a href="#">扫<br/>码<br/>登<br/>录</a></div>
</div>

</div><!--right -->

<div style="height:3px;width:1200px"></div><!--中尾部留空 -->
<div id="wei"><!--结尾 -->
<div style="height:20px;width:1200px"></div><!--留空 -->

<div id="one" class="div-inline">
<div style="height:40px; width:400px;float:right; text-align:center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/logo.png" width="100"></div><!--空格对齐 -->
<div style="height: 60px; width: 400px; float: right; ">
<div style="height: 60px; width: 30px; float: left; "></div><!--留空 -->
<div style="height: 60px; width: 170px; float: right; color: #FFF; font-family: '微软雅黑';">电话：66668888<br/>邮箱：66668888<br/>地址：河南牧业经济学院</div>
</div>
</div><!--one-->

<div id="two" class="div-inline">
&nbsp;&nbsp;<br/>&nbsp;&nbsp;<br/>&nbsp;&nbsp;<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;首&nbsp;页&nbsp;&nbsp;&nbsp;
|
&nbsp;&nbsp;&nbsp;服&nbsp;务&nbsp;建&nbsp;议&nbsp;&nbsp;&nbsp;
|
&nbsp;&nbsp;&nbsp;新&nbsp;闻&nbsp;资&nbsp;讯&nbsp;&nbsp;&nbsp;
|
&nbsp;&nbsp;&nbsp;意&nbsp;见&nbsp;反&nbsp;馈&nbsp;&nbsp;&nbsp;
</div><!--two-->

<div id="three" class="div-inline">&nbsp;&nbsp;<br/>
<img src="images/er.jpg" width="80"><!--二维码 -->
</div>

<div style="font-family: '微软雅黑'; font-size: 10px; text-align:center">COPYRIGHT © 2020 悠游网 All Rights Reserved 豫ICP备66668888号</div>
</div>

</div><!--zong-->

<script>
    //注意：导航 依赖 element 模块，否则无法进行功能性操作
    layui.use('element', function(){
        var element = layui.element;

        //…
    });
    //前端验证
    var userInp=document.querySelector('.userInp');
    var pwdInp=document.querySelector('.pwdInp');
    var yzm=document.querySelector('.yzm');
    var warm=document.querySelector('.warm');
    //获得鼠标焦点时隐藏提示信息
    userInp.onfocus=function () {
            warm.innerHTML="&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    pwdInp.onfocus=function () {
        warm.innerHTML="&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    yzm.onfocus=function () {
        warm.innerHTML="&nbsp;&nbsp;&nbsp;&nbsp;";
    }

</script>
</body>
</html>