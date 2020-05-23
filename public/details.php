<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>U定制</title>
    <link rel="stylesheet" href="./layui/css/layui.css">
    <script src="./layui/layui.js"></script>
    <link rel="stylesheet" href="./css/U_dingzhi.css">
    <style>
        .test{
            width: 400px;
            height: 300px;
            margin: 0 auto;
			float:left;
        }
    </style>
    <!--    海报css样式  勿动-->
</head>
<body>

<div class="header">
    <ul class="layui-nav" lay-filter="">
        <li class="sign"><a href=""><img src="images/logo.png" width="100px" height="50px"></a></li>
        <li class="layui-nav-item " style="margin-left: 80px"><a href="index.php">首页</a></li>
        <li class="layui-nav-item layui-this "><a href="./details.php">U定制</a></li>
        <li class="layui-nav-item"><a href="my_inn.php">我的客栈</a></li>
        <li class="layui-nav-item"><a href="">旅游攻略</a></li>
        <li class="layui-nav-item"><a href="">会员中心</a></li>
        <li class="layui-nav-item" style="margin-left: 20px ; margin-right: 20px"><a href="shop.php"><img src="images/购物车.png" width="20px" height="20px"></a></li>

        <?php
        require_once 'autoload.php';
        session_start();
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


    <?php

    $pro_id=isset($_GET['pro_id'])? $_GET['pro_id']:1;
    $mysql=new  Db('hot_area');
    $link=$mysql->link;
    $sql="SELECT * FROM hot_area where pro_id='$pro_id'";
    $result=mysqli_query($link,$sql);
    $results=mysqli_fetch_assoc($result);
    if ($results){


    ?>
<!--  这下面写HTML代码-->
<div class="cidaohang"><a href="./index.php">首页</a> > <a href="details.php">u定制</a> > <a href=""><?php echo $results['pro_name']  ?></a></div>
<div class="test">
  <div class="layui-carousel" id="test1">
    <div carousel-item>
        <div><img src="images/zt1.jpg" width="400" height="300" alt="zt1"></div>
        <div><img src="images/zt2.jpg" width="400" height="300" alt="zt2"></div>
        <div><img src="images/zt3.jpg" width="400" height="300" alt="zt3"></div>
        <div><img src="images/zt4.jpg" width="400" height="300" alt="zt4"></div>
    </div>
  </div> 

</div>
<!-- 条目中可以是任意内容，如：<img src=""> -->
<div class="right">
  <div class="title" align="left"><?php echo $results['pro_name']?></div>
  <div class="trip">
     <div align="left" class="zhuti1">主 &nbsp;&nbsp; 题:</div>
     <div align="left" class="zhuti2"> <?php echo $results['themo']?></div>
     
     <div algin="left" class="xc1">行程特色：</div>
     <div align="left" class="xc2"> <?php echo $results['tese'] ?></div>
     <div align="left" class="ts1"><img src="images/star.png" width="15" height="15" alt="star">&nbsp;&nbsp;【缤纷景点】&nbsp; </div>
     <div align="left" class="ts2">雅鲁藏布江大峡谷+然乌湖+波密</div>
     <div align="left" class="ts3"><img src="images/star.png" width="15" height="15" alt="star">&nbsp;&nbsp;【贴心赠送】&nbsp; </div>
     <div align="left" class="ts4">提供藏服拍照+藏民家访+牦牛火锅+摄影指导</div>
     <div align="left" class="ts3"><img src="images/star.png" width="15" height="15" alt="star">&nbsp;&nbsp;【安心出行】&nbsp; </div>
     <div align="left" class="ts4">纯玩0强消，24小时管家服务，无缝衔接</div>
    
     <div algin="left" class="xc1">参考价格：</div>
    <div align="left" class="price1"> ￥<?php echo $results['price'] ?></div>
     <div align="left" class="price2"><a href="">立即定制</a></div>
      <?php $pro_id=@$_GET['pro_id']; ?>
     <div align="left" class="price2"><a href="shopController.php?pro_id=<?php echo $pro_id; ?>" class="shop">加入购物车</a></div>
  </div> 
</div>

<div align="right" class="notes">以下内容仅供参考，我们可根据您具体需求提供相应的定制服务，力求让您满意出行。</div>

<div class="detail">
  <div class="navigation" style="position:static">
    <ul>
     <li class="active"><a href="">产品介绍</a></li>
     <li class><a href="">行程介绍</a></li>
     <li class><a href="">预定须知</a></li>
     <li class><a href="">费用说明</a></li>
     <li class><a href="">用户评价</a></li>
    </ul>
  </div>
  <div class="sub-details">
    <div class="detail-introduce">
      <div class="title"> <i class="icon1"><img src="images/icon1.png" width="30" height="30" alt="icon1"></i> 产品介绍 <i id="anchor-introduce" class="anchor"></i> </div>
      <p class="sub-title">一程看尽西藏桃花</p>
      <ul>
        <li>林芝：西藏的江南，以世界上最深的峡谷——雅鲁藏布江大峡谷著称于世，3月底4月初可以欣赏争相开放的艳丽桃花。<br><br>
          然乌湖：藏东第一大湖，景色如诗如画，其静其蓝远近闻名。然乌，这是一个容易让人产生好感的名字。<br><br>
          波密：波密县古乡被雪山环绕，映着桃花，这里不仅桃花数量多，而且种类也较多。白色的桃花洁白如玉似棉，粉色的桃花粉如绽放的杜鹃，         唤起人心底粉红色的记忆。在这片桃花盛开的地方，山不再寂静，水不再凝结底吟。<br><br>
          墨脱：西藏最具神秘性的地方之一。墨脱的门巴人、珞巴人说他们居住的地方叫“白隅欠布白马岗”，意思是“隐藏着的像莲花那样的圣地”。在         佛教的观念里，莲花是吉祥的象征。<br><br>
        </li>
      </ul>
      <!--此处为产品介绍图片-->
      <p><a href=""><img src="images/cp1.jpg" width="276" height="184" alt="cp1"></a>
         <a href=""><img src="images/cp2.jpg" width="276" height="184" alt="cp2"></a>
         <a href=""><img src="images/cp3.jpg" width="276" height="184" alt="cp3"></a>
         <a href=""><img src="images/cp4.jpg" width="276" height="184" alt="cp4"></a>
      </p>
</div>
    <?php }?>
     <div class="detail-introduce">
     <div class="title"><i class="icon1"><img src="images/icon2.png" width="30" height="30" alt="icon2"></i> 行程介绍 <i id="anchor-introduce" class="anchor"></i> 
     </div>
    <div class="traffic">
     <div class="left" style="height:300px;">
     <div class="days" style="position:static;">
      <ul>
       <li class="active"><a href="">第一天</a></li>
       <li class="active"><a href="">第二天</a></li>
       <li class="active"><a href="">第三天</a></li>
       <li class="active"><a href="">第四天</a></li>
       <li class="active"><a href="">第五天</a></li>
       </ul>
     </div>
     </div>
     
     
  <div class="right2">
       <div  class="d1"><img src="images/d1.jpg" width="70" height="400" alt="d1"></div>
   <div class="d11">
      <div class="title2"><p>林芝-派镇-大峡谷</p> <br></div>
      <div class="content2"><p>上午各地出发至林芝机场集合，之后沿着米林机场大道，尼洋河边雪山桃花村庄景象，下午前往雅鲁藏布江大峡谷，著名的西藏山野桃花拍摄地索松村；索松村一带是拍摄南迦巴瓦雪山下桃花盛开的极佳地方；野桃树上的桃花开得花团锦簇，举起相机记录下这些动人的画面。傍边拍摄南迦巴瓦雪山日落映桃花景象，晚上桃花星空创作。</p></div>
      
      <div class="content2">三餐：敬请自理</div>
      <div class="day11"><a href=""><img src="images/day11.jpg" width="278" height="200" alt="day11"></a></div>
      <div class="day11"><a href="kong.html"><img src="images/day12.jpg" width="278" height="200" alt="day12"></a></div>
      <div class="day11"><a href="kong.html"><img src="images/day13.jpg" width="278" height="200" alt="day13"></a></div>
 </div>
 </div>
 
 
 <div class="right3">
       <div  class="d1"><img src="images/d2.jpg" width="70" height="500" alt="d2"></div>
   <div class="d11">
      <div class="title2"><p>大峡谷—直白村—米林</p> <br></div>
      <div class="content2"><p>拍摄欣赏南迦巴瓦雪山村寨桃花辉映的日出风光；前往离南迦巴瓦最近的村寨直白村拍摄山野桃花及村寨雪山；下午前往米林一带拍摄村寨河流及桃花景象。米林雅江两岸桃花处处盛开，举目皆是，满眼充盈。彩门村的桃花，点缀在皑皑的雪山下，在静静流淌的雅江边，真是一幅人间仙境画。大大小小的桃树枝头，绽放出五颜六色的桃花，有粉红的，有浅红的，有红里透白的，在县城四周方圆数十里竞相媲美，这种桃花美景，加上远处的雪山、四周的树林、流淌不息的雅江，若隐若现的藏式民居，真是藏式版的“桃花仙境”。</p></div>
      
      <div class="content2">三餐：敬请自理</div>
      <div class="day11"><a href="l"><img src="images/day21.jpg" width="278" height="200" alt="day21"></a></div>
      <div class="day11"><a href=""><img src="images/day22.jpg" width="278" height="200" alt="day22"></a></div>
      <div class="day11"><a href=""><img src="images/day23.jpg" width="278" height="200" alt="day23"></a></div>
 </div>
 </div>
 
 
 <div class="right4">
       <div  class="d1"><img src="images/d3.jpg" width="70" height="400" alt="d3"></div>
   <div class="d11">
      <div class="title2"><p>米林—波密—林芝—各地</p> <br></div>
      <div class="content2"><p>
上午湖泊村寨与桃花辉映的拍摄； 沿山路而上翻越海拔4702米的色季拉山，在山顶，遥望中国最美十大名山之冠的南迦巴瓦峰如瑞士的阿尔卑斯山；过奇妙的色季拉山（4768米），可见薄去淡雾，明丽淡雅的雪山、绿树、楼宅，感受最美森林魅力，抵林芝的八一镇。桃花沟尼洋河边摄。次日早起送往林芝机场搭乘航班返回家乡，圆满结束行程！</p></div>
      
      <div class="content2">三餐：敬请自理</div>
      <div class="day11"><a href=""><img src="images/day31.jpg" width="278" height="200" alt="day31"></a></div>
      <div class="day11"><a href=""><img src="images/day32.jpg" width="278" height="200" alt="day32"></a></div>
      <div class="day11"><a href=""><img src="images/day33.jpg" width="278" height="200" alt="day33"></a></div>
 </div>
 </div>
    
<div class="detail-introduce">
     <div class="title"><i class="icon3"><img src="images/icon3.png" width="30" height="30" alt="icon2"></i> 预定须知 <i id="anchor-introduce" class="anchor"></i> 
     </div>
     </div>
 <div class="question"> 如您对行程中有任何疑问，请拨打定制游咨询电话400-1161-808。</div>
   
   
    
    <div class="detail-introduce">
     <div class="title"><i class="icon4"><img src="images/icon4.png" width="30" height="30" alt="icon4"></i> 费用说明 <i id="anchor-introduce" class="anchor"></i> 
     </div>
     </div>
 <div class="money"> <p>费用包含：</p> <br>
 <p>1. 行程所列住宿和餐饮费用；</p><br>
 <p>2. 行程内所列景点首道门票；</p><br>
 <p>3. 全程用车费用；</p><br>
 <p>4. 旅游意外保险；</p><br>
 <p>5. 司导服务费；</p><br>
 <p>6. 摄影指导费；</p><br>
 <p>7. 每人每天2瓶矿泉水。</p><br><br><br>
<p>费用不含：</p> <br>
<p>1. 各地至林芝机场集合的大交通费用；</p> <br>
<p>2. 私人的消费；</p> <br>
<p>3. 行程外景点；</p> <br>
<p>4. 单间差1500元/人/全程。</p> <br></div>
 
     
     
 <div class="detail-introduce">
     <div class="title"><i class="icon5"><img src="images/icon5.png" width="30" height="30" alt="icon5"></i> 用户点评 <i id="anchor-introduce" class="anchor"></i> 
     </div>
     </div>    
  
  <div class="list">
    <ul class="cf"><li class="active" data-type="all">全部（<span class="tab_num">1532</span>）<i class="ico"></i></li>
                   <li class="good" >好评（<span class="tab_num">930</span>）<i class="ico"></i></li>
                    <li class="neutral" >中评（<span class="tab_num">30</span>）<i class="ico"></i></li>
                     <li class="bad" >差评（<span class="tab_num">8</span>）<i class="ico"></i></li>
                     <li class="with_image" >有图（<span class="tab_num">722</span>）<i class="ico"></i></li>
                     <li class="qu" >其它问答（<span class="tab_num">622</span>）<i class="ico"></i></li></ul>
  </div>
  <!--评论列表-->
 <?php
  $user=new Db('user');
  $comment=new Db('comment');
  $sql="SELECT uname,com_content,com_time from user u INNER join `comment` c on u.user_id=c.user_id";
  $result=mysqli_query($link,$sql);
  while ($results=mysqli_fetch_assoc($result)) {
 ?>
 <div class="rev-list" style="visibility:visible;">
 <li class="rev-item">
   <div class="user1"><span class="avatar"><a href=""><img src="images/user1.png" width="40" height="40" alt="user1"></a>7468</span>
                      <span><?php echo $results['uname']?></span>
                      </div>
 
 <div class="star"><img src="images/star_five.jpg" width="85" height="20" alt="star"></div>
 <span class="icon-dp"><img src="images/icon-dp.png" width="25" height="25" alt="icon-dp"></span>
 <p class="text" style="width: 200px"><?php echo $results['com_content']?></p>

 <div class="img">
   <div class="img1"><a href=""><img src="images/day12.jpg" width="100" height="100" alt="img4"></a></div>
   <div class="img2"><a href=""><img src="images/day13.jpg" width="100" height="100" alt="img2"></a></div>
   <div class="img3"><a href=""><img src="images/day23.jpg" width="100" height="100" alt="img3"></a></div>
 </div>
 <span class="time">2019-03-29 21:23:49</span></li>
 </div>
  <?php }?>
 <div class="page">
 <div class="page-box">
 <span class="page-item page-prev"><a href=""><</a></span>
 <span class="page-item page-page" data-page="1"><a href="">1</a></span>
 <span class="page-item page-page" ><a href="">2</a></span>
 <span class="page-item page-page" data-page="3"><a href="">3</a></span>
 <span class="page-item page-prev"><a href="">></a></span>
 </div>
 </div>
    </div>
   </div>
 </div>

<script src="/public/layui/layui.js"></script>
<script>
    layui.use('carousel', function(){
        var carousel = layui.carousel;
        //建造实例
        carousel.render({
            elem: '#test1'
            ,width: '400px' //设置容器宽度
            ,arrow: 'always' //始终显示箭头
            //,anim: 'updown' //切换动画方式
			,height: '300px'
			,float:'left'
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