
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
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet" type="text/css">
<![endif]-->

<link href="<?=bu();?>/css/bootstrap.css" rel="stylesheet">
<link href="<?=bu();?>/css/font-awesome.min.css" rel="stylesheet">
<link href="<?=bu();?>/css/theme.css" rel="stylesheet">
<link href="<?=bu();?>/css/prettyPhoto.css" rel="stylesheet" type="text/css"/>
<link href="<?=bu();?>/css/rangeslider.css" rel="stylesheet" type="text/css"/>

<!--[if lt IE 9]>
<script src="<?=bu();?>/js/html5shim.js"></script>
<![endif]-->

<!--[if IE 7]>
<link rel="stylesheet" href="css/font-awesome-ie7.min.css">

<![endif]-->




<script src="<?=bu();?>/js/modernizr.custom.js"></script>

<script src="<?=bu();?>/js/jquery.js"></script>
<script src="<?=bu();?>/js/bootstrap.min.js"></script>
<script src="<?=bu();?>/js/cookie.js"></script>
<script src="<?=bu();?>/js/bootstrap-slider.js"></script>


<script type="text/javascript" src="<?=bu();?>/js/scripts.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body>
<?
$controller = Yii::app()->getController();
$showBanner = $controller->getId() === 'topic' || $controller->getId() === 'course' || $controller->getId() === 'lesson';

if (Yii::app()->user->isGuest &&  isset($_COOKIE['dc_tempusername'])):
$user=User::model()->findByAttributes(array('username'=>$_COOKIE['dc_tempusername']));
if($user->subamount>0):
$showBanner=False;
endif;
endif;

if (!Yii::app()->user->isGuest):
$user=User::model()->findByAttributes(array('id'=>Yii::app()->user->id));
if($user->subamount>0):
$showBanner=False;
endif;
endif;







if ($showBanner):
  $randnumber=rand(0, 3);
if ($randnumber==0):
?>
<div class="dropdown-notification text-center hidden" id="patreonbanner">
 <!-- <button class="close pull-right"><span class="icon-remove"></span></button> -->
   <div class="container">
      <div class="row">
         <div class="span8">
            <h3>Love our lessons?</h3>
            <h3>Help us reach more students just like you!</h3>
            <p>We never run ads and will be free forever.  A monthly voluntary subscription will help us continue to power music learning around the world!  When you do we'll remove these annoying banners and you can cancel anytime.</p>
         </div>
         <div class="span4">
	       <? if (false):?>
            <p id="patreonpitch">If you have found this site useful, <b>make it available for future music students by donating:</b>
               <a class="btn btn-large dc-btn-yellow" id="10Button">$10</a>
               <a class="btn btn-large dc-btn-orange" id="20Button">$20</a>
               <a class="btn btn-large dc-btn-redorange" id="50Button">$50</a>
            <form action="<? echo Yii::app()->request->baseUrl;?>/charge" method="POST" id="payment-form">
               <input type="hidden" name="amount" value="0" id="chargeamount">
            </form>
            <? endif;?>
<a href="<? echo Yii::app()->request->baseUrl; ?>/subscribe" class="btn btn-primary" style="margin-top: 43px"><h2>Click to Subscribe!</h2>


</a>
	                </div>

         </div>
      </div>
   </div>
</div>

<? endif;?>
<? if($randnumber=="1"):?>
<div class="dropdown-notification text-center hidden" id="patreonbanner">
 <!-- <button class="close pull-right"><span class="icon-remove"></span></button> -->
   <div class="container">
      <div class="row">
         <div class="span8">
            <h3>Dave Conservatoire needs YOU!</h3>
            <h3>Help us to improve this site</h3>
            <p>Got 5 minutes?  Please complete our feedback survey!</p>
         </div>
         <div class="span4">
	       <? if (false):?>
            <p id="patreonpitch">If you have found this site useful, <b>make it available for future music students by donating:</b>
               <a class="btn btn-large dc-btn-yellow" id="10Button">$10</a>
               <a class="btn btn-large dc-btn-orange" id="20Button">$20</a>
               <a class="btn btn-large dc-btn-redorange" id="50Button">$50</a>
            <form action="<? echo Yii::app()->request->baseUrl;?>/charge" method="POST" id="payment-form">
               <input type="hidden" name="amount" value="0" id="chargeamount">
            </form>
            <? endif;?>

<a href="https://docs.google.com/forms/d/e/1FAIpQLSfvbt1mP1r-QqzGHTj-wGa7zKx6O7WEVsVtVaas6YZ_JJgutQ/viewform" class="btn btn-primary" style="margin-top: 43px"><h2>Take the survey!</h2>


</a>
	                </div>

         </div>
      </div>
   </div>
</div>
<? endif;?>

<? if($randnumber=="2"):?>
<div class="dropdown-notification text-center hidden" id="patreonbanner">
 <!-- <button class="close pull-right"><span class="icon-remove"></span></button> -->
   <div class="container">
      <div class="row">
         <div class="span8">
            <h3>Need a helping hand?</h3>
            <h3>Try a lesson with Dave IRL!</h3>
            <p>Find out more about personal tuition in a range of musical subjects.</p>
         </div>
         <div class="span4">
	       <? if (false):?>
            <p id="patreonpitch">If you have found this site useful, <b>make it available for future music students by donating:</b>
               <a class="btn btn-large dc-btn-yellow" id="10Button">$10</a>
               <a class="btn btn-large dc-btn-orange" id="20Button">$20</a>
               <a class="btn btn-large dc-btn-redorange" id="50Button">$50</a>
            <form action="<? echo Yii::app()->request->baseUrl;?>/charge" method="POST" id="payment-form">
               <input type="hidden" name="amount" value="0" id="chargeamount">
            </form>
            <? endif;?>

<a href="http://www.daveconservatoire.org/tuition" class="btn btn-primary" style="margin-top: 43px"><h2>Find out more!</h2>


</a>
	                </div>

         </div>
      </div>
   </div>
</div>
<? endif;?>

<? if($randnumber=="3"):?>
<div class="dropdown-notification text-center hidden" id="patreonbanner">
 <!-- <button class="close pull-right"><span class="icon-remove"></span></button> -->
   <div class="container">
      <div class="row">
         <div class="span8">
            <h3>Something new is coming!</h3>
            <h3>After a year of work we've got something to let you try.</h3>
            <p>Be one of the first to try a new and improved Dave Conservatoire!</p>
         </div>
         <div class="span4">
	       <? if (false):?>
            <p id="patreonpitch">If you have found this site useful, <b>make it available for future music students by donating:</b>
               <a class="btn btn-large dc-btn-yellow" id="10Button">$10</a>
               <a class="btn btn-large dc-btn-orange" id="20Button">$20</a>
               <a class="btn btn-large dc-btn-redorange" id="50Button">$50</a>
            <form action="<? echo Yii::app()->request->baseUrl;?>/charge" method="POST" id="payment-form">
               <input type="hidden" name="amount" value="0" id="chargeamount">
            </form>
            <? endif;?>

<a href="http://beta.daveconservatoire.org" class="btn btn-primary" style="margin-top: 43px"><h2>Switch to our beta!</h2>


</a>
	                </div>

         </div>
      </div>
   </div>
</div>
<? endif;?>

<? endif;?>


   </div>
<!--header-->
<div class="navbar">
  <div class="navbar-inner visible-phone">
    <div class="container">

      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <a class="btn btn-navbar" data-toggle="collapse" data-target="#mainfoldout">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <!-- Be sure to leave the brand out there if you want it shown -->
      <a class="brand mobilenav" href="http://www.daveconservatoire.org">  <span class="mobiledc">Dave Conservatoire</span></a>

      <!-- Everything you want hidden at 940px or less, place within here -->
  <div class="nav-collapse collapse navbar-responsive-collapse" id="mainfoldout">
                    <ul class="nav">
                        <a href="/about" class="btn btn-block dc-btn-yellow">About</a>
						<a href="/donate" class="btn btn-block dc-btn-orange">Donate</a>
						<a href="/tuition" class="btn btn-block dc-btn-redorange">Personal Tuition</a>
						<a href="/contact" class="btn btn-block dc-btn-red">Contact</a>
						<?php if (Yii::app()->user->isGuest &&  !isset($_COOKIE['dc_tempusername'])): ?>

						<a href="<? echo Yii::app()->request->baseUrl;?>/login" class="btn btn-block dc-btn-red loginbutton">Login</a>

						<?php
						endif;
						if (Yii::app()->user->isGuest &&  isset($_COOKIE['dc_tempusername'])
						):
						 $user=User::model()->findByAttributes(array('username'=>$_COOKIE['dc_tempusername']));
						 if ($user->points>1):
						 ?>
						 <a class="btn btn-success btn-block loginbutton" href="<? echo Yii::app()->request->baseUrl; ?>/login"><i class="icon-exclamation-sign icon-white"></i> Unclaimed points. Login to save your progress</a>
						 <? else: ?>
						 <a href="<? echo Yii::app()->request->baseUrl;?>/login" class="btn dc-btn-red btn-block loginbutton">Login</a>
						 <? endif;
							 endif; ?>


						<? if(!Yii::app()->user->isGuest): ?>
						<? $user=User::model()->findByPk(Yii::app()->user->id);?>

						<div class="btn-group loginbutton">
								<a class="btn btn-success " href="<? echo Yii::app()->request->baseUrl; ?>/profile"><i class="icon-user icon-white"></i> <? echo Yii::app()->user->name;?> (<span id="pointstotal"><?=$user->points;?></span> Points)</a>
								<a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#profilemenu"><span class="caret"></span></a>
								<ul class="dropdown-menu profilemenudd" >
								<li><a href="<? echo Yii::app()->request->baseUrl; ?>/profile"><i class="icon-pencil"></i> My Profile</a></li>
								<li class="divider"></li>
								<li><a href="<? echo Yii::app()->request->baseUrl; ?>/site/logout"><i class="icon-share-alt"></i>Logout</a></li>
								</ul>
						</div>
					  <?php endif;?>
               </ul>
                  </div>

    </div>
  </div>
</div>
<div class="header hidden-phone">
<!--logo-->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container">
				<a id="desktopbrand" class="brand" href="http://www.daveconservatoire.org"><img src="<?=bu()."/img/dclogo3.png";?>" alt="Dave Conservatoire" style="width:180px" /></a>
				<a class="brand" id="mobilebrand" href="http://www.daveconservatoire.org"><img src="<?=bu()."/img/dcvert.png";?>" alt="Dave Conservatoire" style="width:400px" /></a>
				<div class="navbar">
					<div class="navbuttons">

						<? if(Yii::app()->urlManager->parseUrl(Yii::app()->request)!="site/subscribe"):?>
						<a href="<? echo Yii::app()->request->baseUrl;?>/about" class="btn dc-btn-yellow">About</a>
						<a href="<? echo Yii::app()->request->baseUrl;?>/donate" class="btn dc-btn-orange">Donate</a>
						<a href="<? echo Yii::app()->request->baseUrl;?>/tuition" class="btn dc-btn-redorange">Personal Tuition</a>
						<a href="<? echo Yii::app()->request->baseUrl;?>/contact" class="btn dc-btn-red">Contact</a>

					<? endif;?>

						<?php if (Yii::app()->user->isGuest &&  !isset($_COOKIE['dc_tempusername'])): ?>

						<a href="<? echo Yii::app()->request->baseUrl;?>/login" class="btn dc-btn-red loginbutton">Login</a>

						<?php
						endif;
						if (Yii::app()->user->isGuest &&  isset($_COOKIE['dc_tempusername'])):
						 $user=User::model()->findByAttributes(array('username'=>$_COOKIE['dc_tempusername']));
						 if ($user->points>1):
						 ?>
						 <a class="btn btn-success loginbutton" href="<? echo Yii::app()->request->baseUrl; ?>/login"><i class="icon-exclamation-sign icon-white"></i> Unclaimed points. Login to save your progress</a>
						 <? else: ?>
						 <a href="<? echo Yii::app()->request->baseUrl;?>/login" class="btn dc-btn-red loginbutton">Login</a>
						 <? endif;
							 endif;
						?>


						<? if(!Yii::app()->user->isGuest): ?>
						<? $user=User::model()->findByPk(Yii::app()->user->id);?>

						<div class="btn-group loginbutton">
								<a class="btn btn-success " href="<? echo Yii::app()->request->baseUrl; ?>/profile"><i class="icon-user icon-white"></i> <? echo Yii::app()->user->name;?> (<span id="pointstotal"><?=$user->points;?></span> Points)</a>
								<a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#profilemenu"><span class="caret"></span></a>
								<ul class="dropdown-menu profilemenudd">
								<li><a href="<? echo Yii::app()->request->baseUrl; ?>/profile"><i class="icon-pencil"></i> My Profile</a></li>
								<li class="divider"></li>
								<li><a href="<? echo Yii::app()->request->baseUrl; ?>/site/logout"><i class="icon-share-alt"></i>Logout</a></li>
								</ul>
						</div>
					  <?php endif;

					  ?>


					  	<span id="socialmediaicons">
						<a href="http://www.youtube.com/daveconservatoire" target="_blank"><img class="socialicon" src="<?=bu()."/img/socialicons/youtube.png";?>" /></a>
						<a href="http://www.twitter.com/dconservatoire" target="_blank"><img class="socialicon" src="<?=bu()."/img/socialicons/twitter.png";?>" /></a>
						<a href="http://www.facebook.com/daveconservatoire" target="_blank"><img class="socialicon" src="<?=bu()."/img/socialicons/facebook.png";?>" /></a>
						<a href="https://plus.google.com/113803255247330342246" rel ="publisher" target="_blank"><img class="socialicon" src="<?=bu()."/img/socialicons/gplus.png";?>" /></a>
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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-6437471-7', 'auto');
  ga('send', 'pageview');

</script>



</body>
</html>
