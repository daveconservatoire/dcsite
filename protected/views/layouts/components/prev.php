<? 
$prev=Lesson::model()->find(array('condition'=>'seriesno='.$model->seriesno.' AND topicno ='.$model->topicno.' AND lessonno < '.$model->lessonno, 'order'=>'lessonno DESC'));

if(!empty($prev)) {
?>
<a href="<? echo bu();?>/lesson/<?=$prev->urltitle;?>">Previous</a>	
<?
} 
?>