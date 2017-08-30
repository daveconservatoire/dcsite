<?php

class CourseController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/main';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('view','index'),
				'users'=>array('*'),
			),

		
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($urltitle)
	{
	 $model=Course::model()->find("urltitle = '".$urltitle."'");
	  
	    $videosviewedarray = array();
	    $videolistarray = array();
	    $exercisesansweredarray = array();
	    $exerciselistarray = array();
	    $exercisesmasteredarray = array();
	    $exercisesmasteredlist = array();
	    
	    if(!Yii::app()->user->isGuest){	
	    $user=User::model()->findByPk(Yii::app()->user->id);
	   
	    	foreach ($user->videosviewed as $videoviewed):
	    		   if(!in_array($videoviewed->lesson->topicno, $videosviewedarray)){
                         $videosviewedarray[]=$videoviewed->lesson->topicno;
                   }
                   $videolistarray[]=$videoviewed->lesson->id;
	    	endforeach;
	    	
	   
	
	    	foreach ($user->exercisesanswered as $exerciseanswered):
	    		   if(!in_array($exerciseanswered->exercise->topicno, $exercisesansweredarray)){
                         $exercisesansweredarray[]=$exerciseanswered->exercise->topicno;
                   }
                   if(!in_array($exerciseanswered->exercise->id, $exerciselistarray)){
                   $exerciselistarray[]=$exerciseanswered->exercise->id;
                   }
	    	endforeach;
	    	
	    	foreach ($user->exercisesmastered as $exercisemastered):
	    	         if(!in_array($exercisemastered->exercise->topicno, $exercisesmasteredarray)){
                         $exercisesansweredarray[]=$exercisemastered->exercise->topicno;
                   }
                   if(!in_array($exercisemastered->exercise->id, $exercisesmasteredlist)){
                   $exercisesmasteredlist[]=$exercisemastered->exercise->id;
                   }
            endforeach;
	    	}
       
       
       
	
		$this->render('view',array(
			'course'=>$model, 'videosviewedarray'=>$videosviewedarray,'videolistarray'=>$videolistarray, 'exercisesansweredarray'=>$exercisesansweredarray, 'exerciselistarray'=>$exerciselistarray, 'exercisesmasteredarray'=>$exerciselistarray, 'exercisesmasteredlist'=>$exercisesmasteredlist)
		);
	
	}


	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$this->redirect(bu());
	}


	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($urltitle)
	{
		$model=Course::model()->find("urltitle = '".$urltitle."'");
		if($model===null) {
			$this->redirect(bu());
			}
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='course-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
