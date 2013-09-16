     <div class="row">
				<div class="span4">

			<h6>Course:</h6>	
		<ul class="nav nav-list bs-docs-sidenav activetopic" style="margin-bottom: 10px">
		    <li class="dc-bg-yellow active activetopiclink"><a class="activetopiclink" href="<?=bu()."/course/".$model->urltitle;?>"><?=$model->title;?></a></li>  
		</ul>
          <h6>Topics:</h6>
		<ul class="nav nav-list bs-docs-sidenav">
	    <? $topicsinthiscourse=Topic::model()->findAll("courseId=".$model->id." ORDER BY sortorder");
	       foreach($topicsinthiscourse as $topic){ ?>

	               <li><a href="<? echo Yii::app()->request->baseUrl.'/topic/'.$topic->urltitle;?>"><i class="icon-chevron-right"></i><?=$topic->title;?></a></li>  
	<?    
	}	
	
	?>	
	    </ul>
					
					
					
					
					
					
				</div>
	            