<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

        <meta name="description" content="<?php echo CHtml::encode($this->extraDesc); ?>Dave Conservatoire offers free lessons and interactive exercises on music theory." />
        <meta name="keywords" content="<?php echo CHtml::encode($this->extraKeywords); ?>free music lessons, free music theory, open learning, music history, music notation lessons" />

        <meta property="fb:page_id" content="199558400134104" />
        <meta property="og:title" content="Dave Conservatoire"/>
        <meta property="og:type" content="non_profit"/>
        <meta property="og:url" content="http://www.daveconservatoire.org"/>

        <meta property="og:site_name" content="daveconservatoire.org"/>

    <!-- Le styles -->
     
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/keyboard/style.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/style/css/bootstrap.css" rel="stylesheet">
   


    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      
           .span3 {
      background-color: whiteSmoke;
      text-align: center;
     
      }
      
      .row {     
      padding-bottom: 20px;
      }


    </style>
    
        <!-- Le javascript
    ================================================== -->
   
    <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/style/js/bootstrap.js"></script>
     <script src="<?php echo Yii::app()->request->baseUrl; ?>/style/js/functions.js"></script>
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/exercises/khan-exercise.js"></script>
    

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons NEEDED -->
   
  </head>

<body>

<? include('components/nav.php');?>

	<?php echo $content; ?>
<div class="container" id="page">

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
						<div id="container" class="single-exercise visited-no-recolor" style="overflow: hidden">
							
<div id="exercise-message-container" style="display: none;">
	<div class="exercise_message"></div>
</div>
<div id="warning-bar">
	<span id="warning-bar-content"></span>
	<span id="warning-bar-close">(<a href="">close</a>)</span>
</div>

<div>
	<div id='problemarea'>
		<div id='scratchpad'><div></div></div>
		<div id='workarea'></div>
		<div id='hintsarea'></div>
	</div>
	<div id="answer_area">
		<form id="answerform" action="/exercisedashboard?k" method="get" name="answerform">
			<div id="answercontent" class="info-box fancy-scrollbar">
				<span class="info-box-header">Answer</span>
				<div id="solutionarea"></div>
				<input type="button" class="simple-button action-gradient green" id="check-answer-button" tabindex="10" value="Check Answer"/>
				<input type="submit" style="position: absolute; left: -9999px; width: 1px; height: 1px">
				<input type="button" class="simple-button action-gradient green" id="next-question-button" style="display:none;" name="correctnextbutton" value="Correct! Next Question..."/>
				<span id="show-solution-button-container"></span>
				<img id="throbber" style="display:none;" name="throbber"/>
				<div id="check-answer-results">
					<img id="sad" style="display: none;"/>
					<img id="happy" style="display: none;"/>
					<p class="check-answer-message info-box-sub-description"></p>
				</div>
				<a id="examples-show" href="">Show acceptable answer formats</a>
				<ul id="examples" style="display: none">
				</ul>
			</div>
			<div id="readonly" class="info-box">
				<span id="readonly-problem" class="info-box-header"></span>
				<span id="readonly-title" class="info-box-subheader">You are viewing a problem.</span>
				<span class="info-box-sub-description">To work on problems like this, <a id="readonly-start" href="">start this exercise</a>.</span>
			</div>
			<div class="info-box hint-box">
				<span class="info-box-header">Need help? Get a hint.</span>
				<span class="info-box-sub-description">This <strong>will</strong> set back your progress!</span>
				<div id="get-hint-button-container">
					<input id="hint" type="button" class="simple-button action-gradient orange" value="I'd like a hint" name="hint"/>
				</div>
				<span id="hint-remainder"></span>
			</div>
			<div class="info-box related-video-box" style="display:none;">
				<div id="related-video-content">
					<span class="info-box-header">Stuck? Watch a video.</span>
					<span class="info-box-sub-description">This <strong>does not</strong> set back your progress.</span>

					<div id="related-video-list">
						<span class="related-content-title">Related videos:</span>
						<ul class="related-video-list"></ul>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</form>
		<div id="issue" class="info-box" style="display:none;">
			<span class="info-box-header">Report a Problem</span>
			<span id="issue-status" class="info-box-sub-description"></span>
			<form>
				<label for="issue-title">Issue Title:<input type="text" name="issue-title" id="issue-title" /></label>
				<label for="issue-email">Your Email (optional):<input type="text" name="issue-email" id="issue-email" /></label>
        <label for-"issue-body">Description of Issue:<textarea name="issue-body" id="issue-body"></textarea></label>
				<input type="submit" class="simple-button action-gradient orange" value="Submit Issue">
				<a href="/#" id="issue-cancel">Cancel</a>
				<img id="issue-throbber" style="display:none;" name="issue-throbber">
			</form>
		</div>
	</div>
</div>
<div style="clear: both;"></div>

							
							
						</div>
						<div style="padding: 10px;">&nbsp;</div>
					</div>
			</div>
		
			  <div class="well">
						  <h4 class="pull-left">Streak: &nbsp;&nbsp;&nbsp;&nbsp;</h4>
						   <div id="progress" class="progress progress-striped active progress-danger">
  <div class="bar bar-danger" id="bar" style="width: 0%;"></div>
  </div>
						  
					  </div>



      <!-- Example row of columns -->

<? include('components/footer.php');?>

    </div> <!-- /container -->
<!-- modal box for alerts -->


<div class="modal hide fade" id="myModal">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">×</button>
    <h3 id="modal-title"></h3>
  </div>
  <div class="modal-body">
    <p id="modal-text"></p>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn" data-dismiss="modal">Close</a>
  
  </div>
</div>

<!-- end modal -->

  </body>
</html>

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


