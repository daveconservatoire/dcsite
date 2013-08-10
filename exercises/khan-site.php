   <?
	define('QA_BASE_DIR', dirname(empty($_SERVER['SCRIPT_FILENAME']) ? __FILE__ : $_SERVER['SCRIPT_FILENAME']).'/');
	$yii=dirname(__FILE__).'/../../../../lib/yii/yii.php';
    $config=dirname(__FILE__).'/../../protected/config/main.php';
    require_once($yii);
    Yii::createWebApplication($config);
    include('../sql.php');
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Dave Conservatoire - Learn about music for free!</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link rel="stylesheet" href="/style/css/bootstrap.css">
    <link rel="stylesheet" href="/keyboard/style.css">
    <style type="text/css">
      body {
        padding-top: 60px;
      }
      
      .span4 {
      background-color: whiteSmoke;
      text-align: center;
     
      }
      
      .row {
      padding-bottom: 20px;
      
      }
    </style>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <script type="text/javascript" src="/style/js/functions.js"></script>
  </head>

  <body>


<? include('/home/daverees4/webapps/dcdev/protected/views/layouts/components/nav.php'); ?>

    <div class="container">	
    	<h1 class="playlisttitle"><?=$lessontitle;?> - (<?=$seriestitle;?>, Part <?=$lessonno;?>)</h1>
			<table style="font-size: small">
				<tr>
					<td style="width:470px; padding: 0px"><? if(isset($prevurl)){ echo "Previous Lesson:";}?> <a href="<?=$prevurl;?>"><?=$prevtitle;?></a></td>
				<td style="width:470px; padding: 0px; text-align: right"><? if(isset($nexturl)){ echo "Next Lesson:";}?> <a href="<?=$nexturl;?>"><?=$nexttitle;?></a></td>
	</tr>
			</table>
			<br />			
    		<div id="page-container">
					<div id="page-container-inner">
						
						<div id="fb-root"></div>	
						<div id="container" class="single-exercise visited-no-recolor" style="overflow: hidden"></div>
						<div style="padding: 10px;">&nbsp;</div>
					</div>
			</div>
		
			  <div class="well">
						  <h4 class="pull-left">Streak: &nbsp;&nbsp;&nbsp;&nbsp;</h4>
						   <div id="progress" class="progress progress-striped active progress-danger">
  <div class="bar bar-danger" id="bar" style="width: 0%;"></div>
  </div>
						  
					  </div>

<? include('/home/daverees4/webapps/dcdev/protected/views/layouts/components/footer.php'); ?>

</body>

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
</html>
