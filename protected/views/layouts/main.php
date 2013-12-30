<!DOCTYPE html>
<html lang="en" data-require="music math" >
<head>
<meta charset="utf-8">
<title>Dave Conservatoire</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="<?=bu();?>/img/dcfavicon.ico" type="image/x-icon" /> 
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

<link href="<?=bu();?>/css/bootstrap.css" rel="stylesheet">
<link href="<?=bu();?>/css/font-awesome.min.css" rel="stylesheet">
<link href="<?=bu();?>/css/theme.css" rel="stylesheet">
<link href="<?=bu();?>/css/prettyPhoto.css" rel="stylesheet" type="text/css"/>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--[if IE 7]>
<link rel="stylesheet" href="css/font-awesome-ie7.min.css">

<![endif]-->




<script src="<?=bu();?>/js/modernizr.custom.js"></script>

<script src="<?=bu();?>/js/jquery.js"></script>	
<script src="<?=bu();?>/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?=bu();?>/js/scripts.js"></script>

<!--timeline-->

</head>

<body>
<!--header-->
<div class="header">
<!--logo-->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container">
				<a id="desktopbrand" class="brand" href="http://www.daveconservatoire.org"><img src="<?=bu()."/img/dclogo3.png";?>" alt="Dave Conservatoire" style="width:180px" /></a>
				<a class="brand" id="mobilebrand" href="http://www.daveconservatoire.org"><img src="<?=bu()."/img/dcvert.png";?>" alt="Dave Conservatoire" style="width:400px" /></a>
				<div class="navbar">
					<div class="navbuttons">
						<a href="<? echo Yii::app()->request->baseUrl;?>/site/about" class="btn dc-btn-yellow">About</a>
						<a href="<? echo Yii::app()->request->baseUrl;?>/site/support" class="btn dc-btn-orange">Donate</a>
						<a href="<? echo Yii::app()->request->baseUrl;?>/site/contact" class="btn   dc-btn-redorange">Contact</a>
						
					
						
						<?php if (Yii::app()->user->isGuest): ?>
						
						<a href="<? echo Yii::app()->request->baseUrl;?>/login" class="btn dc-btn-red loginbutton">Login</a>
						
						<?php else: ?>
						<? $user=User::model()->findByPk(Yii::app()->user->dcid);?>
						
						<div class="btn-group loginbutton">
								<a class="btn btn-success " href="<? echo Yii::app()->request->baseUrl; ?>/profile"><i class="icon-user icon-white"></i> <? echo Yii::app()->user->name;?> (<span id="pointstotal"><?=$user->points;?></span> Points)</a>
								<a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#profilemenu"><span class="caret"></span></a>
								<ul class="dropdown-menu">
								<li><a href="<? echo Yii::app()->request->baseUrl; ?>/profile"><i class="icon-pencil"></i> My Profile</a></li>
								<li class="divider"></li>
								<li><a href="<? echo Yii::app()->request->baseUrl; ?>/site/logout"><i class="icon-share-alt"></i>Logout</a></li>
								</ul>
						</div>
					  <?php endif;?>
					  
					  	<span id="socialmediaicons">
						<a href="http://www.youtube.com/daveconservatoire" target="_blank"><img class="socialicon" src="<?=bu()."/img/socialicons/youtube.png";?>" /></a>
						<a href="http://www.twitter.com/dconservatoire" target="_blank"><img class="socialicon" src="<?=bu()."/img/socialicons/twitter.png";?>" /></a>
						<a href="http://www.facebook.com/daveconservatoire" target="_blank"><img class="socialicon" src="<?=bu()."/img/socialicons/facebook.png";?>" /></a>
						</span>
		            </div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo $content; ?>


		
		<div class="navbar" style="margin-bottom: 0px; text-align: center; ">
		<div class="navbar-inner">
			<div class="container">
					<div class="row">
			<div class="span12">
				<div class="copyright" style="padding-top:10px"> Dave Conservatoire
					<script type="text/javascript">
//<![CDATA[
var d = new Date()
document.write(d.getFullYear())
//]]>
</script>
. The videos and exercises on this site are available under a <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/" target="_blank">CC BY-NC-SA Licence</a>.  Exercises powered by the <a href="https://github.com/Khan/khan-exercises" target="_blank">Khan Academy Exercise Framework</a>
				</div>
			</div>
		</div>
			</div>
			</div>
		</div>
	</div>

		
		
<!-- up to top -->
<a href="#"><i class="go-top hidden-phone hidden-tablet icon-double-angle-up"></i></a>
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