<style>
.span2 {
	background-color: #fff;
	margin-bottom:20px; 

}

.span2 p {
	
	color: #000;
	padding: 10px;
}

.suggested-action .suggested-action-image-link {
background-size: cover;
background-repeat: no-repeat;
border-bottom: 10px solid #13967e;
display: block;
height: 200px;
margin: -14px -15px 22px;
overflow: hidden;
position: relative;
}

.suggested-action {
background-color: #f7f7f7;
color: #444!important;
display: block;
margin-bottom: 0;
padding: 14px;
height: 180px;
position: relative;
}
</style>




<? $counter=1;?>
	<!--banner-->
	<div id="banner">
	<div class="container intro_wrapper">
	<div class="inner_content">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=321196507942104";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<? if (Yii::app()->user->isGuest) :?>
	<div class="hero-unit">
		<h1>Learn about music online</h1>
        <p>Simple online theory lessons and exercises to help you discover how music works.</p>
<form class="form-search" method="get" action="<? echo Yii::app()->request->baseUrl;?>/search">

<div class="input-append  input-block-level">
  <input type="text" name="searchquery" class="input-xxlarge search-query topsearch " 
  <? if (isset($_GET['searchquery'])){ echo "value='".$_GET['searchquery']."'";} else {echo "placeholder='Enter your search term here'";}?>"  />
    <button type="submit" class="btn">Search</button>
  </div>



</form>
		
        <a class="btn btn-large" href="<? echo Yii::app()->request->baseUrl;?>/lesson/what-is-music-theory">Get started!</a>
        <a class="btn btn-large" href="<? echo Yii::app()->request->baseUrl;?>/login">Sign in to track your progress!</a>
		<div style="padding:15px 0 15px;">    
			<div style="float: right; ">
				<a href="https://twitter.com/share" class="twitter-share-button" data-via="dconservatoire" data-align="right" data-counturl="http://www.daveconservatoire.org">Tweet</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//		platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				<a href="https://twitter.com/dconservatoire" class="twitter-follow-button" data-show-count="false" data-align="right">Follow 		@dconservatoire</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//	platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
			<div style="float: left">
				<div class="fb-like" data-href="http://www.daveconservatoire.org" data-send="false" data-width="450" data-show-faces="false" data-action="recommend" data-font="trebuchet ms"></div>  
			</div>
			<div style="clear:both"></div>
		</div>
	</div>
	

	

	<div class='page-header'><h2>Newest!</h2></div>
<div class="thumbnails">
	<div class="row"  style="margin-left: 0px">
		<? foreach($newlessons as $lesson): ?>
		<div class='span3'>
			<?php if ($lesson->filetype == "l"): ?>
	
        
<a class="vertical-shadow suggested-action" href="<? echo Yii::app()->request->baseUrl;?>/lesson/<?=$lesson->urltitle;?>">
    <div class="suggested-action-image-link cs" style="background-image: url(http://img.youtube.com/vi/<?=$lesson->youtubeid;?>/0.jpg);">
    </div>
    <h2 class="suggested-action-title" title=":<?=$lesson->title;?>"><?=$lesson->title;?></h2>

</a>

			</a>
			<? endif;?>
			<?php if ($lesson->filetype == "p"): ?>
<a class="vertical-shadow suggested-action" href="<? echo Yii::app()->request->baseUrl;?>/lesson/<?=$lesson->urltitle;?>">
    <div class="suggested-action-image-link cs" style="background-image: url(images/playlist.jpg);">
    </div>
    <h2 class="suggested-action-title" title=":<?=$lesson->title;?>"><?=$lesson->title;?></h2>

</a>
				</a>
			<? endif;?>
			<?php if ($lesson->filetype == "e"): ?>
<a class="vertical-shadow suggested-action" href="<? echo Yii::app()->request->baseUrl;?>/lesson/<?=$lesson->urltitle;?>">
    <div class="suggested-action-image-link cs" style="background-image: url(images/exercise.jpg);">
    </div>
    <h2 class="suggested-action-title" title=":<?=$lesson->title;?>"><?=$lesson->title;?></h2>

</a>
				</a>
			<? endif;?>
		</div>
		<? if($counter==4){ ?>
		</div><div class='row' style="margin-left: 0px">
		<? $counter=1; }  else { $counter++;} ?> 
		<? endforeach;?>
	</div>
</ul>

	<? else: ?>
	<div class="hero-unit">
		<h2>Welcome <? 
		$names= explode(" ", Yii::app()->user->name);
		echo $names[0];
		?></h2>
		<?
		if(empty($recentvids) && empty($recentexs)): ?>
			<p>Time to get started, browse the lessons below and dive in!</p>
		<? else: ?>
			<p>Here's what you've been working on recently.</p>
		<? endif; ?>
		</div>
	</div>
	<? if (!empty($recentvids)): ?>
	<div class="page-header"> <h3>Lessons:</h3></div>
	<div class="row">
	<div class="span12">
       <ul class="thumbnails">
	<? foreach($recentvids as $recentvid) { $vidinfo=Lesson::model()->findByPK($recentvid->lessonId);?>
		<li class="span3">
           <a href='lesson/<?=$vidinfo->urltitle;?>' class='thumbnail'>
				<img src='http://img.youtube.com/vi/<?=$vidinfo->youtubeid;?>/default.jpg'/>
				<h5><?=$vidinfo->title;?></h5>
				</a>
        </li>
<?
}
?>

                </ul>
    </div>
</div>
<? endif;
if (!empty($recentexs)):?>
   <div class="page-header"> <h3>Skills:</h3></div>
<div class="row">


 
    <div class="span12">
       <ul class="thumbnails">
<? foreach($recentexs as $recentex) {
	$exinfo=Lesson::model()->findByPK($recentex->exerciseId);
?>
   
        <li class="span3">
          <a href='exercise/<?=$exinfo->urltitle;?>' class='thumbnail'>
				<img src='images/exercise.jpg' />
				<h5><?=$exinfo->title;?></h5>
				</a>
        </li>
<?
}
?>

                </ul>
    </div>
  </div>
	<? endif; ?>
	<? endif;?>

	</div>
		</div>
			</div>
			
	<div class="container wrapper">
	<div class="inner_content">
	<div class="pad30"></div>
	



<?
// Getting the lessons for each course - would like to move this controller but not sure how!
$courses=Course::model()->findAll(array('order'=>'id DESC'));
foreach($courses as $course): 
$course=Course::model()->findByPk($course->id);
$topics=Topic::model()->findAll("courseId=".$course->id ." ORDER BY sortorder");
$counter=1;
$this->pageTitle='Home | '.Yii::app()->name ;
?>
<div class='page-header'><h2><?=$course->title?></h2></div>
<div class="thumbnails tabbable">
<ul class="nav nav-tabs" style="width: 100%">

	<div class="row"  style="margin-left: 0px; margin-bottom: 10px">
		<? foreach($topics as $topic): ?>
		<div class='span4'>
		<li><a href="<?=bu();?>/topic/<?=$topic->urltitle;?>"><h3><?=$topic->title;?></h3></a></li>
         
		</div>
    <? if($counter==3){ ?>
	</div>
	<div class='row' style="margin-left: 0px">
    <? $counter=1; } else { $counter++;} ?> 
		<? endforeach;?>
	</div>
</div>
<div class="pad30"></div>
<? endforeach;?>
	</div>
	</div>