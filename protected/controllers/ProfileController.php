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

		$this->render('index');
	
}

public function actionActivity() {
	$videos = UserVideoView::model()->findAll(array('condition'=>'userid =4', 'order'=>'timestamp DESC'));
	$exercises = UserExerciseAnswer::model()->findAll(array('condition'=>'userid =4', 'order'=>'timestamp DESC'));
	$this->render('activity', array('videos'=>$videos, 'exercises'=>$exercises));
	
}
	
}