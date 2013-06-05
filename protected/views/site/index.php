<? $counter=1;?>

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
  <input type="text" name="searchquery" class="input-xxlarge search-query input-block-level" placeholder="Search for a topic. . . ">
  <button type="submit" class="btn"><i class="icon-search"></i></button>
</form>
		
        <a class="btn btn-large" href="/lesson/what-is-music-theory">Get started!</a>
        <a class="btn btn-large" href="/login">Sign in to track your progress!</a>
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
<ul class="thumbnails">
	<div class="row"  style="margin-left: 0px">
		<? foreach($newlessons as $lesson): ?>
		<li class='span3'>
			<?php if ($lesson->filetype == "l"): ?>
			<a href='lesson/<?=$lesson->urltitle;?>' class='thumbnail'>
			<img src='http://img.youtube.com/vi/<?=$lesson->youtubeid;?>/default.jpg'/>
			<h5><?=$lesson->title;?></h5>
			</a>
			<? endif;?>
			<?php if ($lesson->filetype == "p"): ?>
				<a href='lesson/<?=$lesson->urltitle;?>' class='thumbnail'>
				<img src='images/playlist.jpg' />
				<h5><?=$lesson->title;?></h5>
				</a>
			<? endif;?>
			<?php if ($lesson->filetype == "e"): ?>
				<a href='exercises/exercises/<?=$lesson->youtubeid;?>.html' class='thumbnail'>
				<img src='images/exercise.jpg' />
				<h5><?=$lesson->title;?></h5>
				</a>
			<? endif;?>
		</li>
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


<?
// Getting the lessons for each course - would like to move this controller but not sure how!
$courses=Course::model()->findAll(array('order'=>'id DESC'));
foreach($courses as $course): 
$course=Course::model()->findByPk($course->id);
$lessons=Lesson::model()->findAll("seriesno=".$course->id ." ORDER BY lessonno");
$counter=1;
$this->pageTitle='Home | '.Yii::app()->name ;
?>
<div class='page-header'><h2><?=$course->title?></h2></div>
<ul class="thumbnails">
	<div class="row"  style="margin-left: 0px">
		<? foreach($lessons as $lesson): ?>
		<li class='span3'>
			<?php if ($lesson->filetype == "l"): ?>
				<a href='lesson/<?=$lesson->urltitle;?>' class='thumbnail'>
				<img src='http://img.youtube.com/vi/<?=$lesson->youtubeid;?>/default.jpg'/>
				<h5>Part <?=$lesson->lessonno;?> - <?=$lesson->title;?></h5>
				</a>
			<? endif;?>
			<?php if ($lesson->filetype == "p"): ?>
				<a href='lesson/<?=$lesson->urltitle;?>' class='thumbnail'>
				<img src='images/playlist.jpg' />
				<h5>Part <?=$lesson->lessonno;?> - <?=$lesson->title;?></h5>
				</a>
			<? endif;?>
			<?php if ($lesson->filetype == "e"): ?>
				<a href='exercise/<?=$lesson->youtubeid;?>' class='thumbnail'>
				<img src='images/exercise.jpg' />
				<h5>Part <?=$lesson->lessonno;?> - <?=$lesson->title;?></h5>
				</a>
			<? endif;?>
		</li>
    <? if($counter==4){ ?>
	</div>
	<div class='row' style="margin-left: 0px">
    <? $counter=1; } else { $counter++;} ?> 
		<? endforeach;?>
	</div>
</ul>
<? endforeach;?>