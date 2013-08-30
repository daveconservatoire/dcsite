<div class="row">
	<div class="span3" >
		<ul class="nav nav-list bs-docs-sidenav" style="margin-bottom: 10px">
		    <li><a href="/dcsite/lesson/what-is-music-playlist">Subject Title</a></li>  
		</ul>
		<ul class="nav nav-list bs-docs-sidenav" style="margin-bottom: 10px">
		      <li><a href="/dcsite/lesson/what-is-music-playlist">Topic Title</a></li>  
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
		<div class="lessontitle">
			<h1 ><? echo $model->title;?></h1>
	    </div>
	    
	 
	
