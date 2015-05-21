<div class="row">
<div class="span3" >
	
<?
	$course=Course::model()->findByPk($model->seriesno);
	$topic=Topic::model()->findByPk($model->topicno); ?>
<h6>Course:</h6>
<ul class="nav nav-list bs-docs-sidenav" style="margin-bottom: 10px">
	<li><a href="<?=bu()."/course/".$course->urltitle;?>"><?=$course->title;?></a></li>
</ul>
<div class="hidden-phone">
	<h6>Lessons in this topic:</h6>
	<ul class="nav nav-list bs-docs-sidenav">
		<? $lessonsinthiscourse=Lesson::model()->findAll("topicno=".$model->topicno." ORDER BY lessonno");
			foreach($lessonsinthiscourse as $thislesson){
			   if($thislesson->id==$model->id) {?>
		<li class="sidebar-selected"><a class="sidebar-selected-link" href="<? echo Yii::app()->request->baseUrl.'/lesson/'.$thislesson->urltitle;?>"><i class="icon-chevron-right"></i><?=$thislesson->title;?></a></li>
		<? } else { ?>
		<li><a href="<? echo Yii::app()->request->baseUrl.'/lesson/'.$thislesson->urltitle;?>"><i class="icon-chevron-right"></i><?=$thislesson->title;?></a></li>
		<?    
			}	
			}
			?>	
	</ul>
</div>
<div class="visible-phone">
		<h6>Current lesson:</h6>
	<ul class="nav nav-list bs-docs-sidenav activetopic" style="margin-bottom: 10px">
		<li class="sidebar-selected"><a class="activetopiclink" href="<?=bu()."/topic/".$model->urltitle;?>"><?=$model->title;?></a></li>
	</ul>
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container">
				<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
				<a class="btn btn-navbar" data-toggle="collapse" data-target="#lesson-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</a>
				<!-- Be sure to leave the brand out there if you want it shown -->
				All lessons in this topic					<!-- Everything you want hidden at 940px or less, place within here -->
				<div id="lesson-collapse" class="nav-collapse collapse">
					<ul class="nav nav-list bs-docs-sidenav">
					<? $lessonsinthiscourse=Lesson::model()->findAll("topicno=".$model->topicno." ORDER BY lessonno");
			foreach($lessonsinthiscourse as $lesson){
			   if($lesson->id==$model->id) {?>
		<li class="active"><a class="sidebar-selected-link" href="<? echo Yii::app()->request->baseUrl.'/lesson/'.$lesson->urltitle;?>"><i class="icon-chevron-right"></i><?=$lesson->title;?></a></li>
		<? } else { ?>
		<li><a href="<? echo Yii::app()->request->baseUrl.'/lesson/'.$lesson->urltitle;?>"><i class="icon-chevron-right"></i><?=$lesson->title;?></a></li>
		<?    
			}	
			}
			?>	
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="hidden-phone">
	<h6>All topics in this course:</h6>
	<ul class="nav nav-list bs-docs-sidenav">
		<? foreach($topic->course->topics as $thistopic){ ?>
		<li 
		<? if ($topic->urltitle==$thistopic->urltitle): ?>
		class="dc-bg-orange active"
		<? endif;?>>
		<a href="<? echo Yii::app()->request->baseUrl.'/topic/'.$thistopic->urltitle;?>">
		<i class="icon-chevron-right"></i>
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
				All topics in this course						<!-- Everything you want hidden at 940px or less, place within here -->
				<div id="topic-collapse" class="nav-collapse collapse">
					<ul class="nav nav-list bs-docs-sidenav">
						<? foreach($topic->course->topics as $thistopic){ ?>
						<li 
							<? if ($topic->urltitle==$thistopic->urltitle): ?>
							class="dc-bg-orange active"
							<? endif;?>
							><a href="<? echo Yii::app()->request->baseUrl.'/topic/'.$thistopic->urltitle;?>">
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
<div class="span9">
<div style="height:43px"></div>
<div class="lesson-content">