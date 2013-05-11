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

<h2 class="playlisttitle"><?=$model->title;?> - (<?=$course->title;?>, Part <?=$model->lessonno?>)</h2>
<table style="font-size: small">
	<tr>
		<td style="width:470px"><? if(isset($prev)){ echo "Previous Lesson:";?> 
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
		<?=$prev->title;?>
		</a>
		<? }?>
		</td>
		
		<td style="width:470px; text-align: right"><? if(isset($next)){ echo "Next Lesson:";?> 
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
		<?=$next->title;?>
		</a>
		<? };?>
		</td>
	</tr>
</table>
<br />

 <div id="vidcontainer" style="margin: 0 auto; text-align: center">
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
          playerVars: { 'autoplay': 1, 'showinfo': 0, 'rel': 0 },
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
            // log a message to the console
          
        },
        // callback handler that will be called on error
        error: function(response){
            // log the error to the console
        },
    
    });
      }
    </script>
 
 
 
 
 
 
  <br /><!-- AddThis Button BEGIN -->
  
  
  
  
  
  
<div class="addthis_toolbox addthis_default_style ">
<a href="http://www.addthis.com/bookmark.php?v=250&amp;username=xa-4d544f4d3f05cc76" class="addthis_button_compact">Share</a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=xa-4d544f4d3f05cc76"></script>
<!-- AddThis Button END -->
<br />

  <h3>Any Questions?</h3>
<div id="disqus_thread"></div>


<script type="text/javascript">
  /**
    * var disqus_identifier; [Optional but recommended: Define a unique identifier (e.g. post id or slug) for this thread] 
    */
  (function() {
   var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
   dsq.src = 'http://davecon.disqus.com/embed.js';
   (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
  })();
</script>
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript=davecon">comments powered by Disqus.</a></noscript>


