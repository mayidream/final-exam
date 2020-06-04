<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>U定制</title>
<!--    导航栏css样式  勿动-->
    <link rel="stylesheet" href="./layui/css/layui.css">
    <script src="./layui/layui.js"></script>
    <link rel="stylesheet" href="./layui/css/daohang.css">
    <!--    导航栏css样式  勿动-->
<style>
	.wei{
		width: 1200px;
		margin: 0 auto;
	}
	#wei{
		width: 1200px;
		height: 180px;
		background-image: url(images/wei.jpg);
		color: #FFF;
		font-size: 14px;
	}
	#one{
		width:400px;
		height:120px;
		float:left;
	}
	#two{
		width: 450px;
		height: 120px;
		font-size: 14px;
		float: left;
		font-family: "微软雅黑";
	}
	#three{
		width: 350px;
		height: 120px;
		float: right;
	}
	.div-inline{
	display:inline
	}
	
	.zhan{
		background-color: #cbf8f3;
		height: 150px;
		margin-bottom: 20px;
	}
	.zhan1{
		display: flex;
		position: relative;
		left: 150px;
		top: 50px;
		align-items: flex-end;
	}
	#zuobiao{
		margin-right: 5px;
	}
	#didian{
	margin-right: 5px;
    font-size: 40px;
    color: #4cc5b6;
	}
	#didian1{
		font-size: 25px;
		margin-right: 5px;
	}
	.zhan2 {
		display: flex;
		border: 5px solid #ff5722;
		width: 540px;
		height: 48px;
		float: right;
		margin-right: 150px;
		background-color: #ff5722;
		align-items: center;
	}
	.sousuo{
		width: 450px;
		height: 48px;
		border: none;
		outline: none;
		letter-spacing: 3px;
	}
	#sousuo1{
		font-size: 25px;
		color: #fff;
		float: right;
		margin-left: 20px;
		letter-spacing: 3px;
	}
	.nav{
		margin: auto;
		width: 1000px;
		border-left:  3px solid #8e8e8e;
		border-right: 3px solid #8e8e8e;
		border-bottom: 3px solid #8e8e8e;
		margin-bottom: 20px;
	}
	.hang1{
		background-color: #50c4b6;
		height: 50px;
		display: flex;
	}
	.hang2{
		display: flex;
		height: 40px;
		align-items: center;
	}
	.xiao1{
		width: 130px;
		text-align: center;
		font-size: 14px;
	}
	.buxian{
		background-color: #50c4b6;
		margin: 3px;
		font-size: 12px;
		color: #fff;
		width: 40px;
		height: 20px;
		text-align: center;
		letter-spacing: 3px;
		margin-right: 30px;
	}
	
	#paixu{
		font-size: 14px;
		color: #6e6e6e;
		margin: 0 30px;
	}
	#paixu1{
		font-size: 14px;
		color: #6e6e6e;
		margin: 0 30px;
		float: right;
	}
	.sousuo2{
		width: 250px;
		height: 20px;
		border: none;
		outline: none;
		letter-spacing: 3px;
	}
	
</style>
<link href="./css/Udingzhi.css" rel="stylesheet" type="text/css">
</head>
<body>
<div style="margin: 0 auto; width: 1200px; ">
<div class="header">
<ul class="layui-nav" lay-filter="">
    <li class="sign"><a href=""><img src="images/logo.png" width="100px" height="50px"></a></li>
    <li class="layui-nav-item " style="margin-left: 100px"><a href="index.php">首页</a></li>
    <li class="layui-nav-item layui-this"><a href="Udingzhi.php">U定制</a></li>
    <li class="layui-nav-item"><a href="my_inn.php">我的客栈</a></li>
    <li class="layui-nav-item"><a href="gonglue.php">旅游攻略</a></li>
    <li class="layui-nav-item"><a href="">会员中心</a></li>
    <li class="layui-nav-item" style="margin-left: 20px ; margin-right: 20px"><a href="shop.php"><img src="images/购物车.png" width="20px" height="20px"></a></li>

    <?php  session_start();
    if (@$_SESSION['username'] &&@$_COOKIE['username']){
        echo "<li class='layui-nav-item'>
                <a href=''><img src='./images/touxiang.jpeg' class='layui-nav-img'>".$_SESSION['username']."</a>
                <dl class='layui-nav-child''>
                    <dd><a href=''>修改信息</a></dd>
                    <dd><a href=''>安全管理</a></dd>
                    <dd><a href='sign_out.php'>退出登录</a></dd>
               </dl>
               </li>";
    }else{echo "<li class='sign' style='list-style: none'><a href='sign_in.php'>登录</a> |<a href='sign_up.php'>注册</a> </li>";} ?>
</ul>
</div>
<!--  这下面写HTML代码-->
	
<div class="zhan">
	<div class="zhan1"><a href="#"><img src="images/location.png" width="50" height="50" id="zuobiao"></a>
    <a href="#"><p id="didian">郑州</p></a><p id="didian1">站</p><img src="images/jiantou.png" width="20" height="20"></div>
	
	<div class="zhan2"><input type="search" class="sousuo" placeholder="请输入目的地、主题或关键词"/> <a href="#"><p id="sousuo1">搜索</p></a></div>
</div>
	
	
<div class="nav">
<div class="hang1">
	<a href="#"><div style="font-size: 20px; background-color: #fff; height: 50px; width: 130px; border-top:5px solid #50c4b6; text-align: center; padding-top: 5px;">全部(82)</div></a>
	<a href="#"><div style="font-size: 20px; width:200px; height:50px;border-top:5 solid #fff; text-align:center;padding-top: 5px;">郑州到云台山(52）</div></a>
	<a href="#"><div style="font-size: 20px; width:200px; height:50px;border-top:5 solid #fff; text-align:center;padding-top: 5px;">郑州到三亚(10）</div></a>
	<a href="#"><div style="font-size: 20px; width:470px; height:50px;border-top:5 solid #fff; padding-left: 5px;padding-top: 5px;">郑州到西装(22）</div></a></div>
	
<div class="hang2">
	<div class="xiao1"><strong>出行方式</strong></div>
	<div class="buxian">不限</div>
	<div style="font-size: 12px; margin-right:30px;"><a href="#">跟团游</a></div>
	<div style="font-size: 12px; margin-right:30px;"><a href="#">自行游</a></div>
	<div style="font-size: 12px; margin-right:30px;"><a href="#">包车游</a></div>
	</div>
<hr style="color:#3D3D3D; height: 2px; width: 95%;">
<div class="hang2">
	<div class="xiao1"><strong>出发日期</strong></div>
	<div class="buxian">不限</div>
	<div style="font-size: 12px; margin-right:30px;"><a href="#">4月</a></div>
	<div style="font-size: 12px; margin-right:30px;"><a href="#">5月</a></div>
	<div style="font-size: 12px; margin-right:30px;"><a href="#"><p style="color: #6c6cff;">自定义出发时间</p></a></div>
	</div>
<hr style="color:#3D3D3D; height: 2px; width: 95%;">
<div class="hang2">
	 <div class="xiao1"><strong>行程天数</strong></div>
	<div class="buxian">不限</div>
	<div style="font-size: 12px; margin-right:30px;"><a href="#">1天</a></div>
	<div style="font-size: 12px; margin-right:30px;"><a href="#">2天</a></div>
	<div style="font-size: 12px; margin-right:30px;"><a href="#">3天</a></div>
	<div style="font-size: 12px; margin-right:30px;"><a href="#">4天</a></div>
	<div style="font-size: 12px; margin-right:30px;"><a href="#">5天</a></div>
	</div>
<hr style="color:#3D3D3D; height: 2px; width: 95%;">
<div class="hang2">
	<div class="xiao1"><strong>游玩主题</strong></div>
	<div class="buxian">不限</div>
	<div style="font-size: 12px; margin-right:30px;"><a href="#">自驾<br>出游</a></div>
	<div style="font-size: 12px; margin-right:30px;"><a href="#">自驾<br>出游</a></div>
	<div style="font-size: 12px; margin-right:30px;"><a href="#">自驾<br>出游</a></div>
	<div style="font-size: 12px; margin-right:30px;"><a href="#">自驾<br>出游</a></div>
	<div style="font-size: 12px; margin-right:30px;"><a href="#">自驾<br>出游</a></div>
	</div>
<hr style="color:#3D3D3D; height: 2px; width: 95%;">
<div class="hang2">
	<div class="xiao1"><strong>优惠活动</strong></div>
	<div class="buxian">不限</div>
	<div style="font-size: 12px; margin-right:30px;"><a href="#">早定优惠</a></div>
	</div>
<hr style="color:#3D3D3D; height: 2px; width: 95%;">
	<div style="width: 1000px; height: 50px;">
		<a href="#"><p style="font-size: 20px; color: #6c6cff; text-align: center;">展示更多⬇</p></a>
	</div>
</div>
	
<div class="nav">
	<div>
	<div style="font-size:12px;float: left; background-color: #fff; height: 50px; width: 130px; border-top:5px solid #50c4b6; text-align: center; padding-top: 5px; "><span style="color: #FF0004">84</span>个产品满足条件</div>
		<div style="height: 40px;width: 870px;float: right; background-color: #6e6e6e;">
			<div style="  background-color: #cbf8f3; float: right; margin-top: 10px; margin-right: 20px;"><input type="search class="sousuo2" placeholder="在结果中继续搜索""><a href="#"><img src="images/sousuo.png" style="width: 20px; height: 10px;"></a></div>
		</div>
	 </div>
	<div style="height: 30px;width: 1000px; display: flex;">
		<a href="#"><p id="paixu"><span style="color: #6c6cff;"><strong>综合⬇</strong></span></p></a>
		<a href="#"><p id="paixu">销量</p></a>
		<a href="#"><p id="paixu">价格</p></a>
		<a href="#"><p id="paixu">产品品质</p></a>
		<a href="#"><p id="paixu">服务保障</p></a>
		<div style="float: right; width: 450px;">
		<a href="#"><p id="paixu1">确保有货</p></a>
		<a href="#"><p id="paixu1">正在团购</p></a>	</div>
	</div>
  </div>
	
	<div style="margin:20px auto; width: 1000px; height: 180px;">
		<a href="chanpingxiangqing.php"><img src="images/tu1.jpg" style="width: 250px;"> </a>
		<a href="chanpingxiangqing.php"> <div class="wenzi1"><p style="font-size: 20px;color: #4372A7; center;"><strong>火车+双飞 &nbsp;|&nbsp; 河南全景纯玩6日游	&nbsp;&nbsp;&nbsp;少林寺&nbsp;|&nbsp;龙门石窟&nbsp;|&nbsp;开封&nbsp;|&nbsp;云台山&nbsp;|&nbsp;24H管家接送.</strong></p></div></a>
	  <a href="chanpingxiangqing.php"> <div style="position: relative; top:-120px; left: 260px; width: 300px;"><p style="font-size: 18px;">三门峡出发 &nbsp;|&nbsp;6天5晚<br>火车往返<br>五一&nbsp;|&nbsp;低价团期：2020-05-20&nbsp;出行</p></div></a>
		<a href="chanpingxiangqing.php"><div style="position: relative;left: 820px;;top:-180px; width:160px;height: 40px; background-color: #6AE5E7;"> 
		  <p style="text-align: center; padding: 5px; color: #FFFFFF; font-size: 18px;letter-spacing: 10px;">新产品</p>
		  <br>
		  <p style="font-size: 20px; color: #ff5722;">￥<span style="font-size: 36px">1903</span>起&nbsp;/&nbsp;人</p>
		  </div></a>
		</div>
	<hr style="color:#3D3D3D; height: 2px; width: 80%;">
	
	<div style="margin:20px auto; width: 1000px; height: 180px;"><a href="chanpingxiangqing.php"><img src="images/tu1.jpg" style="width: 250px;"></a></a><a href="chanpingxiangqing.php"> <div class="wenzi1"><p style="font-size: 20px;color: #4372A7; center;"><strong>火车+双飞 &nbsp;|&nbsp; 河南全景纯玩6日游	&nbsp;&nbsp;&nbsp;少林寺&nbsp;|&nbsp;龙门石窟&nbsp;|&nbsp;开封&nbsp;|&nbsp;云台山&nbsp;|&nbsp;24H管家接送.</strong></p></div></a>
	  <a href="chanpingxiangqing.php"> <div style="position: relative; top:-120px; left: 260px; width: 300px;"><p style="font-size: 18px;">三门峡出发 &nbsp;|&nbsp;6天5晚<br>火车往返<br>五一&nbsp;|&nbsp;低价团期：2020-05-20&nbsp;出行</p></div></a>
		<a href="chanpingxiangqing.php"><div style="position: relative;left: 820px;;top:-180px; width:160px;height: 40px; background-color: #6AE5E7;"> 
		  <p style="text-align: center; padding: 5px; color: #FFFFFF; font-size: 18px;letter-spacing: 10px;">新产品</p>
		  <br>
		  <p style="font-size: 20px; color: #ff5722;">￥<span style="font-size: 36px">1903</span>起&nbsp;/&nbsp;人</p>
		  </div></a>
		</div>
	<hr style="color:#3D3D3D; height: 2px; width: 80%;">
	
	<div style="margin:20px auto; width: 1000px; height: 180px;">
		<a href="chanpingxiangqing.php"> <img src="images/tu1.jpg" style="width: 250px;"> </a>
		<a href="chanpingxiangqing.php"> <div class="wenzi1"><p style="font-size: 20px;color: #4372A7; center;"><strong>火车+双飞 &nbsp;|&nbsp; 河南全景纯玩6日游	&nbsp;&nbsp;&nbsp;少林寺&nbsp;|&nbsp;龙门石窟&nbsp;|&nbsp;开封&nbsp;|&nbsp;云台山&nbsp;|&nbsp;24H管家接送.</strong></p></div></a>
	  <a href="chanpingxiangqing.php"> <div style="position: relative; top:-120px; left: 260px; width: 300px;"><p style="font-size: 18px;">三门峡出发 &nbsp;|&nbsp;6天5晚<br>火车往返<br>五一&nbsp;|&nbsp;低价团期：2020-05-20&nbsp;出行</p></div></a>
		<a href="chanpingxiangqing.php"><div style="position: relative;left: 820px;;top:-180px; width:160px;height: 40px; background-color: #6AE5E7;"> 
		  <p style="text-align: center; padding: 5px; color: #FFFFFF; font-size: 18px;letter-spacing: 10px;">新产品</p>
		  <br>
		  <p style="font-size: 20px; color: #ff5722;">￥<span style="font-size: 36px">1903</span>起&nbsp;/&nbsp;人</p>
		  </div></a>
		</div>
	<hr style="color:#3D3D3D; height: 2px; width: 80%;">
	
	
	
  <div style="display: flex;justify-content: center;">
	<div style="border: 5px solid #fc8864; width: 30px; height: 30px; color: #fc8864;margin:20px; 20px;"><a href="#"><p style="font-size: 24px; text-align:center; color:#fc8864; ">1</p></a></div>
	<div style="border: 5px solid #6e6e6e; width: 30px; height: 30px; color: #6e6e6e;margin:20px; 20px;"><a href="#"><p style="font-size: 24px; text-align:center;">2</p></a></div>
	<div style="border: 5px solid #6e6e6e; width: 80px; height: 30px; color: #6e6e6e;margin:20px; 20px;"><a href="#"><p style="font-size: 24px; text-align:center;">下一页</p></a></div>
	</div>
	
	<div style="width: 1000px; margin: 0 auto;">
	<p style="font-size: 24px; color: #6e6e6e;" >您可能感兴趣的目的地：</p>
	<hr style="color:#313131; height: 2px; width: 95%;">
	<div style="display: flex; justify-content: center;">
		<div><a href="#"><img src="images/chanpin1.png"></a></div>
		<div><a href="#"><img src="images/chanpin1.png"></a></div>
		<div><a href="#"><img src="images/chanpin1.png"></a></div>
		
		</div>
	</div>
	
	
	
<!--  结尾最下端位置 -->
<div class="wei" id="wei"><!--结尾 -->
<div style="height:20px;width:1200px"></div><!--留空 -->

<div id="one" class="div-inline">
<div style="height:40px; width:400px;float:right; text-align:center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/logo1.png" width="100"></div><!--空格对齐 -->
<div style="height: 60px; width: 400px; float: right; ">
<div style="height: 60px; width: 30px; float: left; "></div><!--留空 -->
<div style="height: 60px; width: 170px; float: right; color: #FFF; font-family: '微软雅黑';">电话：66668888<br/>邮箱：66668888<br/>地址：河南牧业经济学院</div>
</div>
</div><!--one-->

<div id="two" class="div-inline">
&nbsp;&nbsp;<br/>&nbsp;&nbsp;<br/>&nbsp;&nbsp;<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php" style="color:#FFF">首&nbsp;页</a>&nbsp;&nbsp;&nbsp;
|
&nbsp;&nbsp;&nbsp;<a href="#" style="color:#FFF">服&nbsp;务&nbsp;建&nbsp;议</a>&nbsp;&nbsp;&nbsp;
|
&nbsp;&nbsp;&nbsp;<a href="gonglue.php" style="color:#FFF">新&nbsp;闻&nbsp;资&nbsp;讯</a>&nbsp;&nbsp;&nbsp;
|
&nbsp;&nbsp;&nbsp;<a href="#" style="color:#FFF">意&nbsp;见&nbsp;反&nbsp;馈</a>&nbsp;&nbsp;&nbsp;
</div><!--two-->

<div id="three" class="div-inline">&nbsp;&nbsp;<br/>
<img src="images/er.jpg" width="80"><!--二维码 -->
</div>

<div style="font-family: '微软雅黑'; font-size: 10px; text-align:center">COPYRIGHT © 2020 悠游网 All Rights Reserved 豫ICP备66668888号</div>
</div>
</div>
<script>
    //注意：导航 依赖 element 模块，否则无法进行功能性操作
    layui.use('element', function(){
        var element = layui.element;

        //…
    });
</script>
</body>
</html>