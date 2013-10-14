<?php

class LessonController extends Controller
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
			array('allow',  // allow all users to perform 'view' actions
				'actions'=>array('view', 'index', 'testexercise'),
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
	   
	   
	   $lessonmodel=Lesson::model()->find("urltitle = '".$urltitle."'");
	   //Add in special Facebook, Twitter and Google metadata for video pages. 
	   
	   if($lessonmodel->filetype=="l") {
	   
	   //Facebook OG meta
		   
		  Yii::app()->clientScript->registerMetaTag('http://img.youtube.com/vi/'.$lessonmodel->youtubeid.'/0.jpg',null,null,array('property'=>'og:image'));
	      Yii::app()->clientScript->registerMetaTag('http://www.youtube.com/v/'.$lessonmodel->youtubeid.'?showinfo=0&rel=0',null,null,array('property'=>'og:video'));
	      Yii::app()->clientScript->registerMetaTag('http://www.daveconservatoire.org/lesson/'.$lessonmodel->urltitle,null,null,array('property'=>'og:url'));
	      Yii::app()->clientScript->registerMetaTag($lessonmodel->title.' | Dave Conservatoire',null,null,array('property'=>'og:title'));
	      Yii::app()->clientScript->registerMetaTag('A free lesson from Dave Conservatoire (www.daveconservatoire.org) called: '.$lessonmodel->title ,null,null,array('property'=>'og:description'));
	      Yii::app()->clientScript->registerMetaTag('video' ,null,null,array('property'=>'og:type'));
	      
	      
	      // Twitter Meta 
	      Yii::app()->clientScript->registerMetaTag('player' ,null,null,array('name'=>'twitter:card'));
	      Yii::app()->clientScript->registerMetaTag('http://www.daveconservatoire.org/lesson/'.$lessonmodel->urltitle ,null,null,array('name'=>'twitter:url'));
	      Yii::app()->clientScript->registerMetaTag($lessonmodel->title.' | Dave Conservatoire',null,null,array('name'=>'twitter:title'));
	      Yii::app()->clientScript->registerMetaTag('A free lesson from Dave Conservatoire (www.daveconservatoire.org) called: '.$lessonmodel->title ,null,null,array('name'=>'twitter:description'));
	      Yii::app()->clientScript->registerMetaTag('http://img.youtube.com/vi/'.$lessonmodel->youtubeid.'/0.jpg',null,null,array('name'=>'twitter:image'));
	      Yii::app()->clientScript->registerMetaTag('480' ,null,null,array('name'=>'twitter:image:width'));
	      Yii::app()->clientScript->registerMetaTag('360' ,null,null,array('name'=>'twitter:image:height'));
	      Yii::app()->clientScript->registerMetaTag('@dconservatoire' ,null,null,array('name'=>'twitter:creator'));
	      Yii::app()->clientScript->registerMetaTag('@dconservatoire' ,null,null,array('name'=>'twitter:site'));
	      Yii::app()->clientScript->registerMetaTag('https://www.youtube.com/embed/'.$lessonmodel->youtubeid ,null,null,array('name'=>'twitter:player'));
	      Yii::app()->clientScript->registerMetaTag('316' ,null,null,array('name'=>'twitter:player:height'));
	      Yii::app()->clientScript->registerMetaTag('560' ,null,null,array('name'=>'twitter:player:width'));

     
	         
	      
	   }
	   
	
	
	
		$this->render($lessonmodel->filetype,array(
			'model'=>$lessonmodel
		));
		
		
	}
	
	public function actionTestExercise ($urltitle) {
		
			$this->render("etest",array('title'=>$urltitle));
	}

   public function actionIndex(){
	   $this->redirect(bu());
   }

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Lesson::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='lesson-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
