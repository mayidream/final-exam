<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
<!--    导航栏css样式  勿动-->
    <link rel="stylesheet" href="./layui/css/layui.css">
    <script src="./layui/layui.js"></script>
    <link rel="stylesheet" href="./layui/css/daohang.css">
    <link rel="stylesheet" href="css/gonglue.css">
    <!--    导航栏css样式  勿动-->
    <!--    海报css样式  勿动-->
    <style>
        .test{
            width: 1200px;
            height: 500px;
            margin: 0 auto;
        }
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
    </style>
    <!--    海报css样式  勿动-->
</head>
<body>

<div class="header">
<ul class="layui-nav" lay-filter="">
    <li class="sign"><a href=""><img src="images/logo.png" width="100px" height="50px"></a></li>
    <li class="layui-nav-item " style="margin-left: 100px"><a href="index.php">首页</a></li>
    <li class="layui-nav-item "><a href="details.php">U定制</a></li>
    <li class="layui-nav-item"><a href="my_inn.php">我的客栈</a></li>
    <li class="layui-nav-item layui-this"><a href="gonglue.php">旅游攻略</a></li>
    <li class="layui-nav-item"><a href="">会员中心</a></li>
    <li class="layui-nav-item" style="margin-left: 20px ; margin-right: 20px"><a href="shop.php"><img src="images/购物车.png" width="20px" height="20px"></a></li>

    <?php session_start();
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

<!--  这下面写HTML代码-->
<div class="test">
<div class="layui-carousel" id="test1">
    <div carousel-item>
        <div><img src="images/1.png"></div>
        <div><img src="images/2.jpg"></div>
        <div><img src="images/3.jpg"></div>
        <div><img src="images/4.jpg"></div>
    </div>
</div>
</div>

<div style="width: 1200px;height: 100px; display: flex;">
  <div style="width: 177px; height:30px; position: relative; left: 200px; border: 3px solid #CCCCCC; padding: 3px;"> <p style="color: #DDBD53; font-size: 20px;">我在周口<span style="color: #6e6e6e">&nbsp; &nbsp;切换城市</span></p></div>
	<div style="width: 500px; height: 30px;position: relative; left: 450px;"><p><input type="text" placeholder="&nbsp;搜索你喜欢的城市/游记/住宿/问答"><input type="button" value="搜 索"></p></div>
</div>	
	
	
<div id="liu">
    <p align="center" class="j">悠友说</p>
    <p align="center" class="t">YOU YOU SAY</p>
    <p align="right" class="y3"><img src="images/短信.png" width="30" height="30" alt="短信"></p>
    <p align="left" class="y4">我来说</p>
</div>

<div id="l1">
    <p align="left" class="hb1">超全&nbsp; |</p>
    <p align="left" class="hb2">吃遍杭州26家大店</p>
    <p align="center" class="y5">在我的印象中，杭州是一个充满诗情画意的地方，到处散发这山水的气息，就在2018年的3月，我决定
去杭州一趟我想把我的春天交给杭州...</p>
    <p align="center" class="y6">爱旅游的小猫咪</p>
    <p align="center" class="y7"><img src="images/实心星星.jpg" width="35" height="5" alt="星星"></p>
    <p align="center" class="y8">2019.08.31</p>
</div>

<div id="l2">
    <p align="left" class="hb1">浪漫&nbsp; |</p>
    <p align="left" class="hb2">三亚之旅</p>
    <p align="center" class="y5">在我的印象中，三亚是一个充满诗情画意的地方，到处散发这山水的气息，就在2018年的3月，我决定
去杭州一趟我想把我的春天交给杭州...</p>
    <p align="center" class="y6">爱旅游</p>
    <p align="center" class="y7"><img src="images/实心星星.jpg" width="35" height="5" alt="星星"></p>
    <p align="center" class="y8">2019.08.31</p>
</div>

<div id="l3">
    <p align="left" class="hb1">惊喜&nbsp; |</p>
    <p align="left" class="hb2">上有天堂下有苏杭</p>
    <p align="center" class="y5">在我的印象中，苏杭是一个充满诗情画意的地方，到处散发这山水的气息，就在2018年的3月，我决定
去杭州一趟我想把我的春天交给杭州...</p>
    <p align="center" class="y6">小猫咪</p>
    <p align="center" class="y7"><img src="images/实心星星.jpg" width="35" height="5" alt="星星"></p>
    <p align="center" class="y8">2019.11.25</p>
  
 <div id="l4"><p align="right" class="y9"> < &nbsp; more &nbsp; > </p> </div>   
</div>

<div style="width: 1200px; margin: 250px 0 0 0;">
	<div style="margin-bottom: 50px;">
	<div style="float: left;"><p style="font-size: 30px; color: #C4A451;margin: 0 0 0 160px;">推荐游记 <a href="#"><span style="font-size: 20px; color: #66BCF1">&nbsp;&nbsp;更多</span></a></p></div>
	<div style=" display: flex; justify-content: flex-end;align-items: center;margin: 0 160px 0 0 ;"> 
		<a href="#"><p style="font-size: 16px; color: #66BCF1">什么是优质游？秘籍必看！</p></a>
		<a href="#"><ul style="margin-right: 2px;border: 3px solid #66BCF1; width: 40px; text-align: center; color: #66BCF1;">头条</ul></a>
		<a href="#"><ul style="margin-right: 2px;border: 3px solid #6e6e6e; width: 40px; text-align: center;">推荐</ul></a>
		<a href="#"><ul style="margin-right: 2px;border: 3px solid #6E6E6E; width: 40px; text-align: center;">更新</ul></a>
	</div>
	</div>
<div style="margin-left: 100px;"> <a href="#"><img src="images/tu1.png" style="width: 1000px;"></a></div>
	<hr style="color:#3D3D3D; height: 2px; width: 90%;">
<div style="margin-left: 100px;"> <a href="#"><img src="images/tu2.png" style="width: 1000px;"></a></div>
	<hr style="color:#3D3D3D; height: 2px; width: 90%;">
<div style="margin-left: 100px;"> <a href="#"><img src="images/tu3.png" style="width: 1000px;"></a></div>
	<hr style="color:#3D3D3D; height: 2px; width: 90%;">
<div style="margin-left: 100px;"> <a href="#"><img src="images/tu4.png" style="width: 1000px;"></a></div>
	<hr style="color:#3D3D3D; height: 2px; width: 90%;">
</div>
	
	
	
	
	<div style="display: flex;justify-content: center;">
	<div style="border: 3px solid #6e6e6e; width: 50px; height: 20px; color: #6e6e6e;margin:10px; 10px;"><a href="#"><p style="font-size: 14px; text-align:center;">上一页</p></a></div>
	<div style="border: 3px solid #66BCF1; width: 20px; height: 20px; color: #fc8864;margin:10px; 10px; background-color: #66BCF1; "><a href="#"><p style="font-size: 14px; text-align:center; color:#fff;">1</p></a></div>
	<div style="border: 3px solid #6e6e6e; width: 20px; height: 20px; color: #6e6e6e;margin:10px; 10px;"><a href="#"><p style="font-size: 14px; text-align:center;">2</p></a></div>
	<div style="border: 3px solid #6e6e6e; width: 20px; height: 20px; color: #6e6e6e;margin:10px; 10px;"><a href="#"><p style="font-size: 14px; text-align:center;">3</p></a></div>
	<div style="border: 3px solid #6e6e6e; width: 20px; height: 20px; color: #6e6e6e;margin:10px; 10px;"><a href="#"><p style="font-size: 14px; text-align:center;">4</p></a></div>
	<div style="border: 3px solid #6e6e6e; width: 50px; height: 20px; color: #6e6e6e;margin:10px; 10px;"><a href="#"><p style="font-size: 14px; text-align:center;">下一页</p></a></div>
	</div>
	
	
	
	
	
	
	
	
	
<div style="height: 200px;">
<div id="qi">
    <p align="right" class="q10">关于我们</p>
    <p align="center" class="q11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ABOUT US</p>
</div>

<div id="qi1">
    <p align="center" class="q12"><img src="images/住宿.png" width="100" height="100" alt="住宿"></p>
    <p align="center" class="q13">住宿</p>
</div>  
  
<div id="qi2">
    <p align="center" class="q12"><img src="images/旅游.png" width="100" height="100" alt="旅游"></p>
    <p align="center" class="q13">旅游</p>
</div>    

<div id="qi3">
    <p align="center" class="q12"><img src="images/跟团.png" width="100" height="100" alt="跟团"></p>
    <p align="center" class="q13">跟团</p>
</div>    

<div id="qi4" style="margin-top: 26px;">
    <p align="left" class="q12">&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/定制.png" width="100" height="100" alt="定制"></p>
    <p align="left" class="q14">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 定制</p>
</div>    
</div>


	
	
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

</div>


<script src="/public/layui/layui.js"></script>
<script>
    layui.use('carousel', function(){
        var carousel = layui.carousel;
        //建造实例
        carousel.render({
            elem: '#test1'
            ,width: '100%' //设置容器宽度
            ,arrow: 'always' //始终显示箭头
            //,anim: 'updown' //切换动画方式
			,height: '400px'
        });
    });
</script>
<script>
    //注意：导航 依赖 element 模块，否则无法进行功能性操作
    layui.use('element', function(){
        var element = layui.element;

        //…
    });
</script>
</body>
</html>