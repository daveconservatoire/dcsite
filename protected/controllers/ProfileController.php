<?

class ProfileController extends Controller {

public $layout='//layouts/main';
/*	
public function init()
{
    if(Yii::app()->user->isGuest)
    {
        $this->redirect(array('site/login'));
    }
}
*/

public function actionIndex() {

       $user=User::model()->find('id='.Yii::app()->user->dcid);
       
       $videos = UserVideoView::model()->findAll(array('condition'=>'userid ='.Yii::app()->user->dcid, 'order'=>'timestamp DESC', 'limit'=>5));
	   $exercises = UserExerciseAnswer::model()->findAll(array('condition'=>'userid ='.Yii::app()->user->dcid, 'order'=>'timestamp DESC', 'limit'=>5));
	   $masters = UserExSingleMastery::model()->findAll(array('condition'=>'userid ='.Yii::app()->user->dcid, 'order'=>'timestamp DESC', 'limit'=>5));
	   
	

	   $videoscount= UserVideoView::model()->count(array('condition'=>'userid ='.Yii::app()->user->dcid));
	   $excount = UserExerciseAnswer::model()->count(array('condition'=>'userid ='.Yii::app()->user->dcid));
	$activitylog=array();
	foreach ($videos as $video):
		$activitylog[]=array('type'=>'video','urltitle'=>$video->lesson->urltitle,'title'=>$video->lesson->title,'timestamp'=>$video->timestamp);
	endforeach;
	foreach($exercises as $exercise):
		//avoid endless listings of the same exercise!  Only add if different or next day
		$end=end($activitylog);
		//if($end['type']=='exercise'&&(date("Y-m-d", $exercise->timestamp)!=date("Y-m-d", $end['timestamp'])) || $end['type']!='exercise'):
			$activitylog[]=array('type'=>'exercise','urltitle'=>$exercise->exercise->urltitle,'title'=>$exercise->exercise->title,'timestamp'=>$exercise->timestamp);
		//endif;
	endforeach;
	foreach ($masters as $master):
		$activitylog[]=array('type'=>'mastery','urltitle'=>$master->exercise->urltitle,'title'=>$master->exercise->title,'timestamp'=>$master->timestamp);
	endforeach;
	
	
	array_sort_by_column($activitylog, 'timestamp', SORT_DESC);
	
	


	

		$this->render('index', array('user'=>$user, 'activitylog'=>$activitylog, 'videoscount'=>$videoscount, 'excount'=>$excount));
	
}

public function actionActivity() {
	$videos = UserVideoView::model()->findAll(array('condition'=>'userid ='.Yii::app()->user->dcid, 'order'=>'timestamp DESC'));
	$exercises = UserExerciseAnswer::model()->findAll(array('condition'=>'userid ='.Yii::app()->user->dcid, 'order'=>'timestamp DESC'));
	   $masters = UserExSingleMastery::model()->findAll(array('condition'=>'userid ='.Yii::app()->user->dcid, 'order'=>'timestamp DESC'));

	
	$activitylog=array();
	foreach ($videos as $video):
	$end=end($activitylog);

	    
		$activitylog[]=array('type'=>'video','urltitle'=>$video->lesson->urltitle,'title'=>$video->lesson->title,'timestamp'=>$video->timestamp);
		
		
	endforeach;
	foreach($exercises as $exercise):
		//avoid endless listings of the same exercise!  Only add if different or next day
		$end=end($activitylog);
		//if($end['type']=='exercise'&&(date("Y-m-d", $exercise->timestamp)!=date("Y-m-d", $end['timestamp'])) || $end['type']!='exercise'):
			$activitylog[]=array('type'=>'exercise','urltitle'=>$exercise->exercise->urltitle,'title'=>$exercise->exercise->title,'timestamp'=>$exercise->timestamp);
		//endif;
	endforeach;
	
		foreach ($masters as $master):
		$activitylog[]=array('type'=>'mastery','urltitle'=>$master->exercise->urltitle,'title'=>$master->exercise->title,'timestamp'=>$master->timestamp);
	endforeach;
	array_sort_by_column($activitylog, 'timestamp', SORT_DESC);

	
	$this->render('activity', array('activitylog'=>$activitylog));
	
}

public function actionFocus() {


$videos = UserVideoView::model()->findAll(array('condition'=>'userid ='.Yii::app()->user->dcid, 'order'=>'timestamp DESC'));	
$exercises = UserExerciseAnswer::model()->findAll(array('condition'=>'userid ='.Yii::app()->user->dcid, 'order'=>'timestamp DESC'));


foreach ($videos as $video):
$focusarray[]=$video->lesson->topic->title;
endforeach;
foreach ($exercises as $exercise):
$focusarray[]=$exercise->exercise->topic->title;
endforeach;
$focustotals = array_count_values($focusarray);
foreach ($focustotals as $key => $value):
$data[]=array($key, $value);
endforeach;

$this->render('focus', array('data'=>$data));
}

public function actionEngagement() {
	
	$this->render('engagement');
}

public function actionUpdate() {

$user=User::model()->find("id=".Yii::app()->user->dcid);
$user->biog=strip_tags($_POST['User']['biog']);

        
         
            if ($user->id==Yii::app()->user->dcid) {
            if($user->save())
                $this->redirect(bu().'/profile');
                } else {
                $this->redirect(bu().'/profile');
                }
                
                
    



    }
	
	
}
	
