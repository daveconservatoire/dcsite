
<div class="container wrapper">
    <div class="inner_content">

            <div class="row">
         
			  				<div class="span4">

			<h6>Course:</h6>	
		<ul class="nav nav-list bs-docs-sidenav activetopic" style="margin-bottom: 10px">
		    <li class="dc-bg-yellow active activetopiclink"><a class="activetopiclink" href="<?=bu()."/course/".$topic->course->urltitle;?>"><?=$topic->course->title;?></a></li>  
		</ul>
          <h6>Topics:</h6>
		<ul class="nav nav-list bs-docs-sidenav">
	    <? foreach($topic->course->topics as $thistopic){ ?>

	               <li><a href="<? echo Yii::app()->request->baseUrl.'/topic/'.$thistopic->urltitle;?>">
	               
	              <? if (in_array($thistopic->id,$videosviewedarray) || in_array($thistopic->id,$exercisesansweredarray)):?> 
	                    <i class="icon-adjust"></i>
	              <? else:?>
	              <i class="icon-chevron-right"></i>
	              
	              <? endif;?>
	              <?=$thistopic->title;?></a>
	               </li>  
	<?    
	}	
	
	?>	
	    </ul>
					
					
					
					
					
					
				</div>
	                    
			       <div class="span8">
			       <div style="height:32px"></div>	
		            <div class="tab-content">
		             	<div class="tab-pane active" id="topic-all">
         <div class="thumbnails">
	        <div class="row"  style="margin: 0 0 20px 0">    
		          
<? 
$counter=1; 
foreach ($topic->lessons as $lesson){

 ?>
		
	
		       <div class='span2'>
		
			
				<a href='<?=bu();?>/lesson/<?=$lesson->urltitle;?>' class='thumbnail vertical-shadow suggested-action 
				
				<? if(in_array($lesson->id,$videolistarray)):?>
				ribbon ribbon-viewed
				<? elseif (in_array($lesson->id,$exerciselistarray)):?>
				ribbon ribbon-inprogress
				<? endif;?>
				
				'>
				<?php if ($lesson->filetype == "l"): ?>
					<img src='http://img.youtube.com/vi/<?=$lesson->youtubeid;?>/default.jpg'/>
				<?php elseif ($lesson->filetype == "p"): ?>
					<img src='<?=bu();?>/img/playlist.jpg'/>
			    <?php elseif ($lesson->filetype == "e"): ?>
					<img src='<?=bu();?>/img/exercise.jpg'/>
				<? endif;?>
				<p><?=$lesson->title;?></p>
				</a>

		</div>
    <? if($counter==4){ ?>
	</div>
	<div class="row"  style="margin: 0 0 20px 0">
    <? $counter=1; } else { $counter++;} ?> 
   

	 <? };?>	

    <? if($counter==4){ ?>
	</div>
	<div class="row"  style="margin: 0 0 20px 0">
    <? $counter=1; } else { $counter++;} ?> 
   


	</div>
</div></div>

						</div>
			
					</div>
	            </div>
			</div>
		</div>
	</div>
</div>