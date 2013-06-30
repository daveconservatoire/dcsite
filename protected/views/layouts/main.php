<!DOCTYPE html>
<html data-require="math math-format graphie graphie-helpers-arithmetic">
<head>
<meta charset="utf-8">
<title>Dave Conservatoire</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo CHtml::encode($this->extraDesc); ?>Dave Conservatoire offers free lessons and interactive exercises on music theory." >
<meta name="keywords" content="<?php echo CHtml::encode($this->extraKeywords); ?>free music lessons, free music theory, open learning, music history, music notation lessons" />
<meta property="fb:page_id" content="199558400134104" />
<meta property="og:title" content="Dave Conservatoire"/>
<meta property="og:type" content="non_profit"/>
<meta property="og:site_name" content="daveconservatoire.org"/>
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,300' rel='stylesheet' type='text/css'>
<!--[if IE]>
	<link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet" type="text/css">
<![endif]-->

<link href="<? echo Yii::app()->request->baseUrl;?>/css/bootstrap.css" rel="stylesheet">
<link href="<? echo Yii::app()->request->baseUrl;?>/css/font-awesome.min.css" rel="stylesheet">
<link href="<? echo Yii::app()->request->baseUrl;?>/css/theme.css" rel="stylesheet">
<link href="<? echo Yii::app()->request->baseUrl;?>/css/prettyPhoto.css" rel="stylesheet" type="text/css"/>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if IE 7]>
<link rel="stylesheet" href="<? echo Yii::app()->request->baseUrl;?>/css/font-awesome-ie7.min.css">
<![endif]-->

<!--timeline-->
<link rel="stylesheet" type="text/css" href="<? echo Yii::app()->request->baseUrl;?>/css/timeline.css" />
<script src="<? echo Yii::app()->request->baseUrl;?>/js/modernizr.custom.js"></script>

<!-- scripts -->
<script src="<? echo Yii::app()->request->baseUrl;?>/js/jquery.js"></script>			
<script src="<? echo Yii::app()->request->baseUrl;?>/js/bootstrap.min.js"></script>
<script src="<? echo Yii::app()->request->baseUrl;?>/js/superfish.js"></script>
<script type="text/javascript" src="<? echo Yii::app()->request->baseUrl;?>/js/scripts.js"></script>

</head>

<body>
<!--header-->
	
		<!--logo-->
			<div class="container">
				
					<!--menu-->
					<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
				<div class="logo">
						 <a href="<? echo Yii::app()->request->baseUrl;?>"><img src="<? echo Yii::app()->request->baseUrl;?>/img/templogo.jpg" alt=""  /></a>  
					</div>
		<nav id="main_menu">
					<div class="">
						<ul class="nav sf-menu">
						
					
					<li class="dropdown"><a href="#tools"class="dropdown-toggle" data-toggle="dropdown">Tools<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<? echo Yii::app()->request->baseUrl;?>/tools/scales" class="active">Scale Dictionary</a></li>
						<li><a href="<? echo Yii::app()->request->baseUrl;?>/tools/chords">Chord Dictionary</a></li>
					</ul>
					</li>
					<li><a href="<? echo Yii::app()->request->baseUrl;?>/officehours" class="active">Virtual Office Hours</a></li>
					<li><a href="<? echo Yii::app()->request->baseUrl;?>/site/support" class="active">Support</a></li>
					<li><a href="<? echo Yii::app()->request->baseUrl;?>/site/about">About</a></li>
					<li><a href="<? echo Yii::app()->request->baseUrl;?>/site/contact">Contact</a></li>
				</ul>
				<p class='navbar-text pull-right'>
				<?php if (Yii::app()->user->isGuest): ?>
		
					<a class='btn btn-success' style='margin-top: 0px' href='<? echo Yii::app()->request->baseUrl; ?>/site/login'>Login</a>
				</p>
				<?php else: ?>
				
				<div class="btn-group pull-right">
				    
					<a class="btn btn-success" href="<? echo Yii::app()->request->baseUrl; ?>/profile"><i class="icon-user icon-white"></i> <? echo Yii::app()->user->name;?></a>
					<a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#profilemenu"><span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<? echo Yii::app()->request->baseUrl; ?>/profile"><i class="icon-pencil"></i> My Profile</a></li>
						<li class="divider"></li>
						<li><a href="<? echo Yii::app()->request->baseUrl; ?>/site/logout"><i class="icon-share-alt"></i>Logout</a></li>
					</ul>
				</div>
				<? $user=User::model()->findByPk(Yii::app()->user->dcid);?>
				<span id="points" class="badge pull-right" style="margin: 9px 5px"><?=$user->points;?></span>
				<?php endif;?>
			</div>
		</div>
	</div>
</div>
		
			</div>
	
	<!--//header-->
<div style="height:40px"></div>




	<?php echo $content; ?>

      <!-- Example row of columns -->
			<!--footer-->
		<div id="footer2">
		<div class="container">
			<div class="row">
				<div class="span12">
				<div class="copyright">
							&copy; Dave Conservatoire
							<script type="text/javascript">
							//<![CDATA[
								var d = new Date()
								document.write(d.getFullYear())
								//]]>
								</script>
							 .  Except where noted, All Rights Reserved.
						</div>
						</div>
					</div>
				</div>
					</div>
					<!-- up to top -->
				<a href="#"><i class="go-top hidden-phone hidden-tablet  icon-double-angle-up"></i></a>
				<!--//end--> 
				

<!-- skills -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-6437471-7']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


					
</body>
</html>



