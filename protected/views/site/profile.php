<?
function humanTiming ($time)
{
   
    $time = time() - $time; // to get the time since that moment
    
    $tokens = array (
        31536000 => 'year',
        2592000 => 'month',
        604800 => 'week',
        86400 => 'day',
        3600 => 'hour',
        60 => 'minute',
        1 => 'second'
    );

    foreach ($tokens as $unit => $text) {
    
        if ($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);
        return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
    }

}

$videosviewed= UserVideoView::Model()->countByAttributes(array("userId" => Yii::app()->user->dcid));
$exercisesanswered= UserExerciseAnswer::Model()->countByAttributes(array("userId" => Yii::app()->user->dcid, "complete"=>1));
$recentvids=UserVideoView::Model()->findAll(array("condition"=>"userId = ".Yii::app()->user->dcid, "limit"=>4, "order"=>"timestamp DESC"));
$recentexs=UserExerciseAnswer::Model()->findAll(array("select"=>"t.exerciseId", "condition"=>"userId = ".Yii::app()->user->dcid, "limit"=>4, "order"=>"timestamp DESC", "distinct"=>true));

?>

			<div class="container wrapper">
		<div class="inner_content">
<div class="banner">

		
<div class='row'>
<div class='span3'>
<h1><?=$model->name;?></h1>
<p>Joined: <? echo humanTiming($model->joinDate);?> ago</p>
</div>



<div class='span3 offset3'>
<h2><?=$videosviewed;?></h2>
<p>videos viewed</p>
</div>
<div class='span3'>
<h2><?=$exercisesanswered;?></h2>
<p>exercises correctly answered</p>
</div>
</div>

</div>
<h3>Recently Watched:</h3>
<div class="row">


 
    <div class="span12">
       <ul class="thumbnails">
<? foreach($recentvids as $recentvid) {
	$vidinfo=Lesson::model()->findByPK($recentvid->lessonId);
?>
   
        <li class="span3">
          <div class="thumbnail">
             <a href="/lesson/<?=$vidinfo->urltitle?>" class="thumbnail"><img src='http://img.youtube.com/vi/<?=$vidinfo->youtubeid;?>/0.jpg'/></a>
            <div class="caption">
              <h5><?=$vidinfo->title?></h5>

              <p><a href="<? echo Yii::app()->request->baseUrl; ?>/lesson/<?=$vidinfo->urltitle?>" class="btn btn-primary">Review</a></p>
            </div>
          </div>
        </li>
<?
}
?>

                </ul>
    </div>
</div>
    <h3>Recently Attempted Exercises:</h3>
<div class="row">


 
    <div class="span12">
       <ul class="thumbnails">
<? foreach($recentexs as $recentex) {
	$exinfo=Lesson::model()->findByPK($recentex->exerciseId);
?>
   
        <li class="span3">
          <div class="thumbnail">
      <a href="<? echo Yii::app()->request->baseUrl; ?>/lesson/<?=$exinfo->urltitle?>" class="thumbnail"> <img src='images/exercise.jpg' style="width:210px; height: 168px"/></a>
            <div class="caption">
              <h5><?=$exinfo->title?></h5>

              <p><a href="<? echo Yii::app()->request->baseUrl; ?>/lesson/<?=$exinfo->urltitle?>" class="btn btn-primary">Practice More</a></p>
            </div>
          </div>
        </li>
<?
}
?>

                </ul>
    </div>
  </div>
		</div>
			</div>