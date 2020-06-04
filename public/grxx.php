<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>个人信息</title>
    <link rel="stylesheet" href="./css/geren.css">
</head>
<body>
<?php
require_once 'autoload.php';
$mysql=new Db('user');
$link=$mysql->link;
$user_id=$_GET['user_id'];
$sql="select * from user where user_id='$user_id' ";
$res=mysqli_query($link,$sql);
while ($result=mysqli_fetch_assoc($res)){


?>
<form action="huiyuan_update2.php?user_id=<?php echo $user_id ?>" method="post">
<div id="wai">
<div id="bt">个人信息</div>
<div id="xx">
<div id="tx"><a href="#"><img src="images/猫猫.png" width="150" height="150" alt="tx"></a></div>	
<div id="ghtx"><a href="#"><font color="#FF0004">更换头像</font></a></div>

<div id="zh">
<div id="zh1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;昵称</div>
<div id="zh2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="uname" value="<?php echo $result['uname']?>"></div>
<div id="zh3"><a href="#">></a></div>
	</div>
    <div id="zh">
        <div id="zh1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;悠密码</div>
        <div id="zh2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" value="<?php echo $result['upass']?>" name="password"></div>
        <div id="zh3"><a href="#">></a></div>
    </div>
<div id="zh">
<div id="zh1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;性别</div>
<div id="zh2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="sex" value="<?php echo $result['sex']?>"></div>
<div id="zh3"><a href="#">></a></div>
	</div>
<div id="zh">
<div id="zh1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;邮箱</div>
<div id="zh2"><font color="#FF0004">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" value="<?php echo $result['email']?>"></font></div>
<div id="zh3"><a href="#">></a></div>
	</div>
<div id="zh">
<div id="zh1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;绑定手机</div>
<div id="zh2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="telphone" value="<?php echo $result['telphone']?>"></div>
<div id="zh3"><a href="#">></a></div>
	</div>
<div id="zh">
<div id="zh1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;个人所在地</div>
<div id="zh2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="address" value="<?php echo $result['address']?>"></div>
<div id="zh3"><a href="#">></a></div>
	</div>
</div>
    <?php } ?>
<div id="bc"><input class="button" type="submit" name="submit" value="保存修改"/></div>
</div>
</form>
</body>
</html>