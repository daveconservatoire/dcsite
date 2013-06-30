<ul class="nav nav-list bs-docs-sidenav">
<? $lessonsinthiscourse=Lesson::model()->findAll("seriesno=".$model->seriesno." ORDER BY lessonno");
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