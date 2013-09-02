<?php
$this->breadcrumbs=array(
	'Lessons'=>array('index'),
	$model->title,
);
$course=Course::model()->find("id = '".$model->seriesno."'");
$lessonno=($model->lessonno);
$nextlesson=$lessonno+1;
$prevlesson=$lessonno-1;
$prev= Lesson::model()->find("seriesno = '".$model->seriesno."' AND lessonno='".$prevlesson."'");
$next= Lesson::model()->find("seriesno = '".$model->seriesno."' AND lessonno='".$nextlesson."'");
$this->pageTitle=$model->title." | ".$course->title." | "."Dave Conservatoire";
$this->extraDesc="A free music lesson called - ".$model->title.". ";
$this->extraKeywords=$model->title.", ".$course->title.", ";

if (!empty($this->pageDescription))
{
  echo '<meta name="description" content="' . $this->pageDescription . '" />';
}
?>






	<!--banner-->
	<!--
	<div id="banner">
	<div class="container intro_wrapper">
	<div class="inner_content">

	<h1 class="title">Video Title</h1>
	<h1 class="intro">Short description</h1>
	</div>
		</div>
			</div>
-->			
			<div class="container wrapper">
		<div class="inner_content">


<? $this->renderPartial("//layouts/components/sidebar", array('model'=>$model));?>

	
					

					 <div id="vidcontainer" style="margin: 0 auto; text-align: center" itemprop="video" itemscope itemtype="http://schema.org/VideoObject">
 <meta itemprop="name" content="<?= $model->title;?>" />
 <meta itemprop="description" content="A free music lesson from Dave Conservatoire called - <?= $model->title;?>" />
 <meta itemprop="thumbnailUrl" content="http://img.youtube.com/vi/<?=$model->youtubeid;?>/0.jpg" />
 <meta itemprop="contentURL" content="http://www.youtube.com/v/<?=$model->youtubeid;?>?showinfo=0&rel=0" />
 <meta itemprop="embedURL" content="https://www.youtube.com/embed/<?=$model->youtubeid;?>?showinfo=0&rel=0" />
 <div class="vendor">
<div id="player"></div>
 </div>
 
     <script>
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');
      tag.src = "//www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '390',
          width: '640',
          videoId: '<?=$model->youtubeid;?>',
          playerVars: { 'showinfo': 0, 'rel': 0 },
          events: {
            'onStateChange': onPlayerStateChange
          }
        });
      }

      // 4. The API will call this function when the video player is ready.


      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
    
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.ENDED) {  
        updateRecord(1, 5);        
        }
        if (event.data == YT.PlayerState.PLAYING) {    
        updateRecord(2, 5);    
        }
      }
      function updateRecord(status, position) {
		    $.ajax({
        url: "<? echo Yii::app()->request->baseUrl; ?>/api/videoview",
        type: "post",
        data: "lessonId="+<?=$model->id;?>+"&status="+status+"&position="+position,
        // callback handler that will be called on success
        success: function(response, textStatus, jqXHR){
           console.log("Video View logged!");
          
        },
        // callback handler that will be called on error
        error: function(response){
            console.log("Video View logging failed!");
        }
    
    });
      }
    </script>
 
 
 </div>
					<ul class="pager">
  <li class="previous">
  <? if(isset($prev)){ ?> 
		<? if($prev->filetype=="l" || $prev->filetype=="p") {
		?>
		<a href="<? echo Yii::app()->request->baseUrl;?>/lesson/<?=$prev->urltitle;?>">	
		<?			
		} else {
			?>
			<a href="<? echo Yii::app()->request->baseUrl;?>/exercise/<?=$prev->urltitle;?>">	
			<?
		}
		
		?>
		&larr; Previous Lesson
		</a>
		<? }?>

  </li>
  <li class="next">
  <? if(isset($next)){?> 
		<? if($next->filetype=="l" || $next->filetype=="p") {
		?>
		<a href="<? echo Yii::app()->request->baseUrl;?>/lesson/<?=$next->urltitle;?>">	
		<?			
		} else {
			?>
			<a href="<? echo Yii::app()->request->baseUrl;?>/exercise/<?=$next->urltitle;?>">	
			<?
		}
		?>
		Next Lesson &rarr;
		</a>
		<? };?>
  </li>
</ul>
		  <? if($model->description!=""):?>
  <div class="well">
  <?= nl2br($model->description);?>
  <br /><br />
    <div class="addthis_toolbox addthis_default_style ">
<a href="http://www.addthis.com/bookmark.php?v=250&amp;username=xa-4d544f4d3f05cc76" class="addthis_button_compact">Share</a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=xa-4d544f4d3f05cc76"></script>
  </div>

  <? else:?>
    <div class="addthis_toolbox addthis_default_style ">
<a href="http://www.addthis.com/bookmark.php?v=250&amp;username=xa-4d544f4d3f05cc76" class="addthis_button_compact">Share</a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=xa-4d544f4d3f05cc76"></script>
 
  <? endif;?>
<br />			
					
	
			<div class="pad25"></div>
			<? $this->renderPartial("//layouts/components/comments"); ?>
				</div>
					</div>
						</div>
					</div>
				
				</div>
			</div>
		</div>
	<!--//page-->

