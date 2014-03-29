
				<div class="span4">

			
			<h6>Course:</h6>
		<ul class="nav nav-list bs-docs-sidenav" style="margin-bottom: 10px">
		    <li><a href="<?=bu()."/course/".$course->urltitle;?>" class="white"><?=$course->title;?></a></li>  
		</ul>
			<h6>Topics:</h6>
		<ul class="nav nav-list bs-docs-sidenav">
	   
	    <?   foreach($course->topics as $thistopic){ ?>

	             							<li  <? if($topic->id==$thistopic->id) { echo 'class="active activetopic dc-bg-orange"';}?>><a href="<?=bu();?>/topic/<?=$thistopic->urltitle;?>" class="activetopiclink"><?=$thistopic->title;?></a></li> 
	<?    
	}	
	
	?>	
	    </ul>
					
</div>
	            