<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>悠游网</title>
<!--    导航栏css样式  勿动-->
    <link rel="stylesheet" href="./layui/css/layui.css">
    <script src="./layui/layui.js"></script>
    <link rel="stylesheet" href="./layui/css/index.css">
    <!--    导航栏css样式  勿动-->
    <!--    海报css样式  勿动-->
    <style>
        .haibao{
            width: 1200px;
            height: 500px;
            margin: 0 auto;
        }
    </style>
    <!--    海报css样式  勿动-->
</head>
<body>

<div class="header">
<ul class="layui-nav" lay-filter="">
    <li class="sign"><a href=""><img src="images/logo.png" width="100px" height="50px"></a></li>
    <li class="layui-nav-item layui-this" style="margin-left: 80px"><a href="index.php">首页</a></li>
    <li class="layui-nav-item "><a href="">U定制</a></li>
    <li class="layui-nav-item"><a href="">我的客栈</a></li>
    <li class="layui-nav-item"><a href="">旅游攻略</a></li>
    <li class="layui-nav-item"><a href="">会员中心</a></li>
    <li class="layui-nav-item" style="margin-left: 20px ; margin-right: 20px"><a href=""><img src="images/购物车.png" width="20px" height="20px"></a></li>

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

    <!--从数据库中获取数据-->
    <?php
    require_once 'autoload.php';
        $mysqli=new Db('hot_area');
        $link=$mysqli->link;
        $sql='SELECT * FROM hot_area ';
        $result=mysqli_query($link,$sql);
        $results=mysqli_fetch_assoc($result);
    ?>


<!--  这下面写HTML代码-->
<div class="haibao">
<div class="layui-carousel" id="test1">
    <div carousel-item>
        <div><a href="#"><img src="images/1.png"></a> </div>
        <div><a href="#"><img src="images/2.jpg"></a> </div>
        <div><a href="#"><img src="images/3.jpg"></a> </div>
        <div><a href="#"><img src="images/4.jpg"></a> </div>
    </div>
</div>
</div>
<!-- 条目中可以是任意内容，如：<img src=""> -->
<div id="yi">
<div id="zuo">
<img src="<?php echo $results['pro_path']?>">
<a href=""><p align="right" class="jg">￥<?php echo @$results['price'] ?></p></a>
<p align="center" class="zt"><?php echo $results['pro_name'] ?></p>
<p align="center" class="xzt"><?php echo @$results['commit'] ?></p>
</div>
<div id="zhong">
<p align="center" class="bt">热门景点</p>
<p align="center" class="xbt">POPULAR&nbsp;DESTINATION</p><br/>
<a href=""><p align="center" class="jg">more&nbsp;&nbsp;&nbsp;&nbsp;></p></a><br/><br/>
    <?php $results=mysqli_fetch_assoc($result); ?>
<img src="<?php echo $results['pro_path'] ?>" width="356" height="271">
<a href=""><p align="right" class="jg">￥<?php echo @$results['price'] ?></p></a>
<p align="center" class="zt"><?php echo $results['pro_name'] ?></p>
<p align="center" class="xzt"><?php echo @$results['commit'] ?></p>
</div>
<div id="you">
<br/>
<br/>
<br/>

<p><input type="text" placeholder="&nbsp;请搜索你喜欢的地方"><input type="button" value="搜 索"></p>
<br/><br/><br/><br/>
    <?php $results=mysqli_fetch_assoc($result); ?>
<img src="<?php echo $results['pro_path'] ?>" width="349" height="270">
<a href="#"><p align="right" class="jg">￥<?php echo @$results['price'] ?></p></a>
<p align="center" class="zt"><?php echo @$results['pro_name'] ?></p>
<p align="center" class="xzt"><?php echo @$results['commit'] ; ?></p>
</div>
</div>
<div id="er">
<p align="center" class="j">今日特惠</p>
<p align="center" class="t">TODAY'S&nbsp;SPECIAL&nbsp;OFFER</p><br/>
<div id="daohang">
	<ul>
    <li><a href=""><font color="#EE7D00">酒店</font></a></li>
    <li><a href="">民宿</a></li>
    <li><a href="">旅馆</a></li>
    <li><a href="">国内游</a></li>
    <li><a href="">境外游</a></li>
	<li><a href="">more >></a></li>
</ul>
</div>
<div id="ezuo">

    <?php
    $mysql=new Db('tehui');
    $sql='select * from tehui';
    $result=mysqli_query($link,$sql);
    $results=mysqli_fetch_assoc($result);
    ?>

	<img src="<?php echo $results['pro_path']?>">
	<div id="w1">
	<p align="center" class="ss"><?php echo $results['pro_name'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <p align="center" class="dc"><?php echo $results['commit'] ?></p>
	</div>
	<div id="an1" align="left"><input class="button1" type="button" value="立即预定"/></div>
  </div>
<div id="eyou">
	<div id="ys">
	<div id="ys1">
        <?php $results=mysqli_fetch_assoc($result); ?>
		<div><img src="<?php echo @$results['pro_path']?>"></div>
		<p align="center" class="xg"><?php echo @$results['pro_name']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
		<div id="an2" align="left"><input class="button" type="button"  value="立即预定"/></div>
	  </div>
        <?php $results=mysqli_fetch_assoc($result); ?>
	<div id="ys2"><div><img src="<?php echo $results['pro_path']?>"></div>
		<p align="center" class="xg"><?php echo $results['pro_name']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
		<div id="an2" align="left"><input class="button" type="button"  value="立即预定"/></div>
	  </div>
        <?php $results=mysqli_fetch_assoc($result); ?>
	<div id="ys3"><div><img src="<?php echo $results['pro_path']?>"></div>
		<p align="center" class="xg"><?php echo $results['pro_name']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
		<div id="an2" align="left"><input class="button" type="button"  value="立即预定"/></div>
	  </div>
	</div>
	<div id="yx">
        <?php $results=mysqli_fetch_assoc($result); ?>
	<div id="yx1"><div><img src="<?php echo $results['pro_path']?>"></div>
		<p align="center" class="xg"><?php echo $results['pro_name']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
		<div id="an2" align="left"><input class="button"  type="button"  value="立即预定"/></div>
	  </div>
        <?php $results=mysqli_fetch_assoc($result); ?>
	<div id="yx2"><div><img src="<?php echo $results['pro_path']?>"></div>
		<p align="center" class="xg"><?php echo $results['pro_name']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
		<div id="an2" align="left"><input class="button" type="button"  value="立即预定"/></div>
	  </div>
        <?php $results=mysqli_fetch_assoc($result); ?>
	<div id="yx3"><div><img src="<?php echo $results['pro_path']?>"></div>
		<p align="center" class="xg"><?php echo $results['pro_name']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
		<div id="an2" align="left"><input class="button" type="button" value="立即预定"/></div>
	  </div>
	</div>
</div>
</div>
<div id="san">
<p align="center" class="j">主题旅游</p>
<p align="center" class="t">THEME&nbsp;TOURS</p><br/>
<div id="daohang">
	<ul>
    <li><a href=""><font color="#EE7D00">定制</font></a></li>
    <li><a href="">蜜月</a></li>
    <li><a href="">亲子</a></li>
    <li><a href="">夕阳红</a></li>
    <li><a href="">高端游</a></li>
	<li><a href="">more >></a></li>
</ul>
</div>
<div id="sl">
	<p align="center" class="rm">热门主题玩法</p>
	<div id="hb" ><ul>
    <li><a href="">·海滨岛屿</a></li>
    <li><a href="">·游乐园</a></li>
    <li><a href="">·免签出境</a></li>
    <li><a href="">·海底隧道</a></li>
</ul></div>
	<div id="my">
	<ul>
    <li><a href="">·蜜月度假</a></li>
    <li><a href="">·名山胜水</a></li>
    <li><a href="">·婚纱拍摄</a></li>
    <li><a href="">·免签出境</a></li>
</ul>
	</div>
  </div>
    <?php
    $mysql=new Db('theme');
    $sql='select * from theme';
    $result=mysqli_query($link,$sql);
    $results=mysqli_fetch_assoc($result);
    ?>
<div id="s2">
	<div align="center"><img src="<?php echo $results['pro_path']?>"></div>
	<a href="#"><p align="left" class="q">￥<?php echo $results['price']?></p></a>
	<a href="#"><p align="left" class="i">起</p></a>
	<p align="right" class="myd">满意度&nbsp;<?php echo $results['satisfied']?>%</p>
  </div>
<div id="s3">
    <?php $results=mysqli_fetch_assoc($result); ?>
	<div align="center"><img src="<?php echo $results['pro_path']?>"></div>
	<a href="#"><p align="left" class="q1">￥<?php echo $results['price']?></p></a>
	<a href="#"><p align="left" class="i1">起</p></a>
	<p align="right" class="myd1">满意度&nbsp;<?php echo $results['satisfied']?>%</p>
  </div>
<div id="s4">
    <?php $results=mysqli_fetch_assoc($result); ?>
	<div align="center"><img src="<?php echo $results['pro_path']?>"></div>
	<a href="#"><p align="left" class="q2">￥<?php echo $results['price']?></p></a>
	<a href="#"><p align="left" class="i2">起</p></a>
	<p align="right" class="myd2">满意度&nbsp;<?php echo $results['satisfied']?>%</p>
  </div>

<div id="wu">
	<p align="center" class="rm">旅游贴士</p>
	<div id="hb" ><ul>
    <li><a href="">·天气出行</a></li>
    <li><a href="">·免签出境</a></li>
    <li><a href="">·蜜月度假</a></li>
    <li><a href="">·海底隧道</a></li>
</ul></div>
	<div id="my">
	<ul>
    <li><a href="">·道路指南</a></li>
    <li><a href="">·名山胜水</a></li>
    <li><a href="">·婚纱拍摄</a></li>
    <li><a href="">·免签出境</a></li>
</ul>
	</div>
  </div>
    
<div id="w2">
    <?php $results=mysqli_fetch_assoc($result); ?>
	<div align="center"><img src="<?php echo $results['pro_path']?>"></div>
	<a href="#"><p align="left" class="q">￥<?php echo $results['price']?></p></a>
	<a href="#"><p align="left" class="i">起</p></a>
	<p align="right" class="myd">满意度&nbsp;<?php echo $results['satisfied']?>%</p>
  </div>
<div id="w3">
    <?php $results=mysqli_fetch_assoc($result); ?>
	<div align="center"><img src="<?php echo $results['pro_path']?>"></div>
	<a href="#"><p align="left" class="q1">￥<?php echo $results['price']?></p></a>
	<a href="#"><p align="left" class="i1">起</p></a>
	<p align="right" class="myd1">满意度&nbsp;<?php echo $results['satisfied']?>%</p>
  </div>
<div id="w4">
    <?php $results=mysqli_fetch_assoc($result); ?>
	<div align="left"><img src="<?php echo $results['pro_path']?>"></div>
	<a href="#"><p align="left" class="q2">￥<?php echo $results['price']?></p></a>
	<a href="#"><p align="left" class="i2">起</p></a>
	<p align="right" class="myd2">满意度&nbsp;<?php echo $results['satisfied']?>%</p>
  </div>  
</div>


<div id="liu">
    <p align="center" class="j">悠友说</p>
    <p align="center" class="t">YOU YOU SAY</p>
    <p align="right" class="y3"><img src="images/短信.png" width="30" height="30" alt="短信"></p>
    <p align="left" class="y4">我来说</p>
</div>

<div id="l1">
    <?php
    $mysql=new Db('you_speak');
    $sql='select * from you_speak';
    $result=mysqli_query($link,$sql);
    $results=mysqli_fetch_assoc($result); ?>
    <p align="left" class="hb1">超全&nbsp; |</p>
    <p align="left" class="hb2"><?php echo @$results['commit_title'] ?></p>
    <p align="center" class="y5"><?php echo @$results['commit'] ?></p>
    <p align="center" class="y6">爱旅游的小猫咪</p>
    <p align="center" class="y7"><img src="images/实心星星.jpg" width="35" height="5" alt="星星"></p>
    <p align="center" class="y8">2019.08.31</p>
</div>

<div id="l2">
    <?php $results=mysqli_fetch_assoc($result);  ?>
    <p align="left" class="hb1">浪漫&nbsp; |</p>
    <p align="left" class="hb2"><?php echo @$results['commit_title'] ?></p>
    <p align="center" class="y5"><?php echo @$results['commit'] ?></p>
    <p align="center" class="y6">爱旅游</p>
    <p align="center" class="y7"><img src="images/实心星星.jpg" width="35" height="5" alt="星星"></p>
    <p align="center" class="y8">2019.08.31</p>
</div>

<div id="l3">
    <?php $results=mysqli_fetch_assoc($result);  ?>
    <p align="left" class="hb1">惊喜&nbsp; |</p>
    <p align="left" class="hb2"><?php echo @$results['commit_title'] ?></p>
    <p align="center" class="y5"><?php echo @$results['commit'] ?></p>
    <p align="center" class="y6">小猫咪</p>
    <p align="center" class="y7"><img src="images/实心星星.jpg" width="35" height="5" alt="星星"></p>
    <p align="center" class="y8">2019.11.25</p>
  
 <div id="l4"><p align="right" class="y9"> < &nbsp; more &nbsp; > </p> </div>   
</div>

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

<div id="qi4">
    <p align="left" class="q12">&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/定制.png" width="100" height="100" alt="定制"></p>
    <p align="left" class="q14">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;定制</p>
</div>

<!--尾部-->
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

        <div style="font-family: '微软雅黑'; font-size: 10px; text-align:center;height: 10px;width: 1200px">COPYRIGHT © 2020 悠游网 All Rights Reserved 豫ICP备66668888号</div>
    </div>





</div>


<script src="./layui/layui.js"></script>
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