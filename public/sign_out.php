<?php
session_start();
session_destroy();
setcookie('username',null);
setcookie('password',null);

header('refresh:5;url=index.php');
echo '您已成功退出，五秒后自动跳转至<a href="sign_in.php" style="text-decoration: none"><strong style="color: red;">登录页面</strong></a>';