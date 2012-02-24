<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/index2.js"></script>
        
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<!--头部-->
<div id="headerBg">
	<div class="wrap">
		<div class="logo"><h1><a href="http://www.chinasunergy.com/"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/logo.gif"  alt="中电光伏" /></a></h1></div>
	  <div class="languageLink">
        <form name="form" id="form">
          <select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)" class="langLinkCss">
            <option value="http://test4.tfwk.cn/cn/">中文版</option>
            <option value="http://test4.tfwk.cn/en/">ENGLISH</option>
            <option value="http://test4.tfwk.cn/dg">FRaNÇaIS</option>
            <option value="http://test4.tfwk.cn/fa">DEUTSCH</option>
            <option value="http://test4.tfwk.cn/ita">ITaLIaNO</option>
          </select>
        </form>
	  </div>
	  <div class="searchBg">
        <div class="headerNav"><a href="#">Home</a> | <a href="#">Site Map</a></div>
        <div class="headerSearch">
			<span class="search_s">Search</span>
            <span class="search_k"><input class="searchKbg" name="" type="text" /></span>
            <span class="search_go"><button class="seachBtn" type="submit"></button></span>
        </div>
      </div>
	</div>
    <div class="clr"></div>
</div>
<!--头部结束-->
<!--导航-->
<div id="navBg">
    <div class="mainmenu">
        <ul class="menu">
            <li class="list">
                <a class="category" href="<?php echo Yii::app()->request->baseUrl; ?>/site/index">首页</a>
            </li>
        </ul>
        <ul class="menu">
            <li class="list">
                <a class="category" href="<?php echo Yii::app()->request->baseUrl; ?>/page/14">关于CSUN  »</a>
                <ul class="submenu">
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/page/14">中电光伏概况</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/page/16">了解我们</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/page/18">里程碑</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/page/19">管理团队</a></li>
                </ul>
            </li>
        </ul>
        <ul class="menu">
            <li class="list">
                <a class="category" href="<?php echo Yii::app()->request->baseUrl; ?>/taxonomy/1">新闻中心  »</a>
                <ul class="submenu">
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/taxonomy/1">公司动态</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/taxonomy/1">媒体关注</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/taxonomy/1">招标公告</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/taxonomy/1">展会活动</a></li>
                </ul>
            </li>
        </ul>
        <ul class="menu">
            <li class="list">
                <a class="category" href="<?php echo Yii::app()->request->baseUrl; ?>/page/20">产品与服务  »</a>
                <ul class="submenu">
                        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/page/20">太阳能电池</a></li>
                        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/page/22">光伏组件</a></li>
                        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/page/24">产品服务</a></li>
                        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/page/20">客户服务</a></li>
                        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/page/27">技术研发</a></li>
                        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/page/28">了解太阳能</a></li>
                </ul>
            </li>
        </ul>
        <ul class="menu">
            <li class="list">
                <a class="category" href="<?php echo Yii::app()->request->baseUrl; ?>/#">投资者关系</a>
            </li>
        </ul>
      
        <ul class="menu">
        <li class="list">
                <a class="category" href="<?php echo Yii::app()->request->baseUrl; ?>/page/13">案例中心</a>
        </li>
        </ul>
        <ul class="menu">
        <li class="list">
                <a class="category" href="<?php echo Yii::app()->request->baseUrl; ?>/page/29">联系我们</a>
        </li>
        </ul>
    </div>
    <div class="clr"></div>
</div>
<!--导航结束-->

                
<div class="wrap">
    <div class="workConBg" id="chery">
	<?php echo $content; ?>
    </div>
</div><!-- page -->
<!--底部版权-->
<div class="wrap footBg">
    <div class="footLeft">&copy;2012 Copyright CSUN,all Rights Reserved.</div>
    <div class="footRight"><a href="job.html">Join US</a> | <a href="contact.html">Contact</a> |  <a href="site.html">Site Map</a> | Designed By <a href="http://www.tfwk.cn">Tunful</a></div>
</div> 
</body>
</html>
