<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>注册页面</title>
    <link rel="stylesheet" href="./css/sign_up.css">
</head>

<body background="images/timg.png"  style="background-repeat: no-repeat; background-size: 100% 100%;background-attachment: fixed;">
	
<div class="logo"><a href="#"><img src="images/logo1.png"></a></div> 
<div class="ci"><p id="da"><strong>悠游网</strong></p></div>
<div class="ci1"><p id="xiao">让你我的出行更加便捷</p></div>
	<div class="lianxi"><p><a href="#"  style="color:#CACACA">帮助中心&nbsp; &nbsp; &nbsp;&nbsp; </a>|<a href="#C8C8C8">&nbsp; &nbsp; &nbsp; &nbsp; 🎧</a></p>
	</div>
<div class="da">
	
  <p id="zc"><strong>欢迎注册</strong></p>
	<p id="yy">已有帐号？<a href="sign_in.php">登录</a></p>
    <div style="color: red;margin-left: 150px"><strong>

    <!--php代码处理开始-->
	<?php
    session_start();
    if (@$_SESSION['error']) {
        echo $_SESSION['error'];
    }


        $_SESSION['_token']=md5('str'.time());
    ?>
    <!--php处理程序结束-->
        </strong>
    </div>
    <form action="./signupController.php" method="post">
	<div class="xm">
	<div class="xx">用户名</div>
	<div class="yhm"><input class="userInp" name="username" type="text" placeholder="请输入用户名"/></div>
	</div>
	
  <div class="xm">
	<div class="xx">手机号</div>
	<div class="yhm"><input class="userInp"  name="tel" type="text" placeholder="可用于登录和找回密码"/></div>
  </div>
	
  <div class="xm">
	<div class="xx">密&nbsp;&nbsp;&nbsp;&nbsp;码</div>
	<div class="yhm"><input class="pwdInp" name="password" type="password" placeholder="请输入密码"/></div>
  </div>
	
	<div class="xm">
	<div class="xx">验证码</div>
	<div class="yzm"><input class="userInp" name="verify" type="text" placeholder="请输入验证码"/></div>
	<div class="yzt"><img src="useVcode.php"  onclick="this.src='useVcode.php?'+Math.random()" style="float: right"></div>
	</div>

  <div class="xm"><input name="submit" type="submit"   class="submit" value="注册"></div>
        <input type="hidden" name="_token" value="<?php echo $_SESSION['_token'] ?>">
    </form>
  	<p id="xy1" align="center">注：注册即默认同意<a href="#">《悠游网用户协议》</a></p>
	<p id="xy" align="center">及<a href="#">《悠游网隐私权保护声明》</a></p>
</div>
</body>
</html>









