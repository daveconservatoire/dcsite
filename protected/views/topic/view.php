
<div class="container wrapper">
    <div class="inner_content">

            <div class="row">
             <? $topics=Topic::model()->findAll("courseId=".$model->courseId ." ORDER BY sortorder");?>
			    <? $this->renderPartial("//layouts/components/topicsidebar", array('model'=>$model));?>	         
			       <div class="span8">
			       <div style="height:32px"></div>	
		            <div class="tab-content">
		             	<div class="tab-pane active" id="topic-all">
         <div class="thumbnails">
	        <div class="row"  style="margin: 0 0 20px 0">    
		          
<? $lessons=Lesson::model()->findAll("seriesno=".$model->courseId ." AND topicno=".$model->id." ORDER BY lessonno"); 
$counter=1; 
foreach ($lessons as $lesson){

 ?>
		
		       <div class='span2'>
			<?php if ($lesson->filetype == "l"): ?>
			
				<a href='<?=bu();?>/lesson/<?=$lesson->urltitle;?>' class='thumbnail vertical-shadow suggested-action'>
				<img src='http://img.youtube.com/vi/<?=$lesson->youtubeid;?>/default.jpg'/>
				<p><?=$lesson->title;?></p>
				</a>



			<? endif;?>
			<?php if ($lesson->filetype == "p"): ?>
	<a href='<?=bu();?>/lesson/<?=$lesson->urltitle;?>' class='thumbnail vertical-shadow suggested-action'>
				<img src='<?=bu();?>/img/playlist.jpg'/>
				<p><?=$lesson->title;?></p>
				</a>

			<? endif;?>
			<?php if ($lesson->filetype == "e"): ?>
	<a href='<?=bu();?>/lesson/<?=$lesson->urltitle;?>' class='thumbnail vertical-shadow suggested-action'>
				<img src='<?=bu();?>/img/exercise.jpg'/>
			<p><?=$lesson->title;?></p>
				</a>


</a>
			<? endif;?>
		</div>
    <? if($counter==4){ ?>
	</div>
	<div class="row"  style="margin: 0 0 20px 0">
    <? $counter=1; } else { $counter++;} ?> 
   

	 <? };?>	
	</div>
</div></div>
<?


		            
foreach ($topics as $topic) : 
?>               
   	<div class="tab-pane" id="topic-<?=$topic->id;?>">
         <div class="thumbnails">
	        <div class="row"  style="margin: 0 0 20px 0">                    

<? $lessons=Lesson::model()->findAll("topicno=".$topic->id ." ORDER BY lessonno");
$counter=1;
foreach($lessons as $lesson): ?>


		
		       <div class='span2'>
			<?php if ($lesson->filetype == "l"): ?>
			
				<a href='<?=bu();?>/lesson/<?=$lesson->urltitle;?>' class='thumbnail vertical-shadow suggested-action'>
				<img src='http://img.youtube.com/vi/<?=$lesson->youtubeid;?>/default.jpg'/>
				<p><?=$lesson->title;?></p>
				</a>



			<? endif;?>
			<?php if ($lesson->filetype == "p"): ?>
	<a href='<?=bu();?>/lesson/<?=$lesson->urltitle;?>' class='thumbnail vertical-shadow suggested-action'>
				<img src='<?=bu();?>/img/playlist.jpg'/>
				<p><?=$lesson->title;?></p>
				</a>

			<? endif;?>
			<?php if ($lesson->filetype == "e"): ?>
	<a href='<?=bu();?>/lesson/<?=$lesson->urltitle;?>' class='thumbnail vertical-shadow suggested-action'>
				<img src='<?=bu();?>/img/exercise.jpg'/>
			<p><?=$lesson->title;?></p>
				</a>


</a>
			<? endif;?>
		</div>
    <? if($counter==4){ ?>
	</div>
	<div class="row"  style="margin: 0 0 20px 0">
    <? $counter=1; } else { $counter++;} ?> 
    <? endforeach;?>
	</div></div></div>
	 <? endforeach;?>	
	</div>
</div>

						</div>
			
					</div>
	            </div>
			</div>
		</div>
	</div>
</div>