<div class="row">
	<div class="span3" >
	<?
	    $course=Course::model()->findByPk($model->seriesno);
	    $topic=Topic::model()->findByPk($model->topicno); ?>
		<ul class="nav nav-list bs-docs-sidenav" style="margin-bottom: 10px">
		    <li><a href="<?=bu()."/course/".$course->urltitle;?>"><?=$course->title;?></a></li>  
		</ul>
		<ul class="nav nav-list bs-docs-sidenav" style="margin-bottom: 10px">
		      <li><a href="<?=bu()."/topic/".$topic->urltitle;?>"><?=$topic->title;?></a></li>  
		</ul>
		<ul class="nav nav-list bs-docs-sidenav">
	    <? $lessonsinthiscourse=Lesson::model()->findAll("topicno=".$model->topicno." ORDER BY lessonno");
	       foreach($lessonsinthiscourse as $lesson){
	          if($lesson->id==$model->id) {?>
	               <li class="sidebar-selected"><a class="sidebar-selected-link" href="<? echo Yii::app()->request->baseUrl.'/lesson/'.$lesson->urltitle;?>"><i class="icon-chevron-right"></i><?=$lesson->title;?></a></li>
	<? } else { ?>
	               <li><a href="<? echo Yii::app()->request->baseUrl.'/lesson/'.$lesson->urltitle;?>"><i class="icon-chevron-right"></i><?=$lesson->title;?></a></li>  
	<?    
	}	
	}
	?>	
	    </ul>
    </div>
	<div class="span9">
	<div class="lesson-content">

	 
	
