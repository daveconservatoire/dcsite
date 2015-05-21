
<div class="container wrapper">
    <div class="inner_content">

            <div class="row">
         
			  				<div class="span4">

			<h6>Course:</h6>	
		<ul class="nav nav-list bs-docs-sidenav activetopic" style="margin-bottom: 10px">
		    <li class="dc-bg-yellow active activetopiclink"><a class="activetopiclink" href="<?=bu()."/course/".$topic->course->urltitle;?>"><?=$topic->course->title;?></a></li>  
		</ul>
		<div class="hidden-phone">
          <h6>Topics:</h6>
		<ul class="nav nav-list bs-docs-sidenav">
	    <? foreach($topic->course->topics as $thistopic){ ?>

	               <li 
	               <? if ($topic->urltitle==$thistopic->urltitle): ?>
	               class="dc-bg-orange active"
	               <? endif;?>
	               
	               ><a href="<? echo Yii::app()->request->baseUrl.'/topic/'.$thistopic->urltitle;?>">
	               
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
		<div class="visible-phone">
			<h6>Current topic:</h6>
			
					<ul class="nav nav-list bs-docs-sidenav activetopic" style="margin-bottom: 10px">
		    <li class="dc-bg-yellow active activetopiclink"><a class="activetopiclink" href="<?=bu()."/topic/".$topic->urltitle;?>"><?=$topic->title;?></a></li>  
		</ul>
		
		<div class="navbar">
						<div class="navbar-inner">
							<div class="container">
								<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
								<a class="btn btn-navbar" data-toggle="collapse" data-target="#topic-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								</a>
								<!-- Be sure to leave the brand out there if you want it shown -->
								Other topics in this course							<!-- Everything you want hidden at 940px or less, place within here -->
								<div id="topic-collapse" class="nav-collapse collapse">
									<ul class="nav nav-list bs-docs-sidenav">
	    <? foreach($topic->course->topics as $thistopic){ ?>

	               <li 
	               <? if ($topic->urltitle==$thistopic->urltitle): ?>
	               class="dc-bg-orange active"
	               <? endif;?>
	               
	               ><a href="<? echo Yii::app()->request->baseUrl.'/topic/'.$thistopic->urltitle;?>">
	               
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
							</div>
						</div>
					</div>

		</div>
					
					
					
					
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
				<? elseif (in_array($lesson->id, $exercisesmasteredlist)):?>
				ribbon ribbon-mastered
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
<!--
<a class="btn btn-primary btn-block" href="<?=$topic->urltitle;?>/mastery"><h2>Feeling Confident?  Take this topic's completion test!</h2></a>
-->
						</div>
			
					</div>
	            </div>
			</div>
		</div>
	</div>
</div>