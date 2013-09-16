
				<div class="span4">

			<? $course=Course::model()->findByPk($model->courseId);?>	
			<h6>Course:</h6>
		<ul class="nav nav-list bs-docs-sidenav" style="margin-bottom: 10px">
		    <li><a href="<?=bu()."/course/".$course->urltitle;?>" class="white"><?=$course->title;?></a></li>  
		</ul>
			<h6>Topics:</h6>
		<ul class="nav nav-list bs-docs-sidenav">
	    <? $topicsinthiscourse=Topic::model()->findAll("courseId=".$model->courseId." ORDER BY sortorder");
	       foreach($topicsinthiscourse as $topic){ ?>

	             							<li  <? if($model->id==$topic->id) { echo 'class="active activetopic dc-bg-orange"';}?>><a href="<?=bu();?>/topic/<?=$topic->urltitle;?>" class="activetopiclink"><?=$topic->title;?></a></li> 
	<?    
	}	
	
	?>	
	    </ul>
					
</div>
	            