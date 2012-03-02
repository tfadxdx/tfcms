<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/backend.css" rel="stylesheet" type="text/css" media="all" />
        <!--[if IE]>
                <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" rel="stylesheet" type="text/css" media="all">
                <meta http-equiv="X-UA-Compatible" content="IE=7" />
                <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/excanvas.js"></script>
        <![endif]-->

        <script type="text/javascript" SRC="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
        <script type="text/javascript" SRC="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui.js"></script>
        <script type="text/javascript" SRC="<?php echo Yii::app()->request->baseUrl; ?>/js/backend.js"></script>
        <script type="text/javascript" charset="utf-8">
        $(function(){
            // find all the input elements with title attributes
            $('input[title!=""]').hint();
            $('#login_info').click(function(){
                        $(this).fadeOut('fast');
                });
        });
        </script>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body class="login">
	<!-- Begin login window -->
<div id="login_wrapper">
		<div id="login_body_window">
			<div class="inner">
                                <img src="<?php echo Yii::app()->baseUrl;?>/images/adminLogo.gif" alt="logo" />
				<?php echo $content;?>
		  </div>
		</div>
		<!-- End content -->
		<div id="login_reflect"></div>
	</div>
	<!-- End login window -->
<div id="adminFooter">&copy; 2011 tnueful Network Technology . All rights reserved.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;咨询电话：025-86616931  86616631</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-203192-11']);
  _gaq.push(['_setDomainName', 'none']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>
