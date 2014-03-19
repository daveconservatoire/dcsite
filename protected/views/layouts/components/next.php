<? 
$next=Lesson::model()->find(array('condition'=>'seriesno='.$model->seriesno.' AND topicno ='.$model->topicno.' AND lessonno > '.$model->lessonno, 'order'=>'lessonno ASC'));
if(!empty($next)) {
?>
<a href="<? echo bu();?>/lesson/<?=$next->urltitle;?>">Next</a>	
<? }?>