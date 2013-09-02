<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
		
		);
	}
	
	public function actionProfile()
	{
	if (!Yii::app()->user->isGuest){
		$model=User::model()->findByPk(Yii::app()->user->dcid);
		$this->render('profile',array('model'=>$model));
		} else {
		$this->redirect('/');	
		}
		
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		
	      Yii::app()->clientScript->registerMetaTag('http://www.daveconservatoire.org/images/logo.png',null,null,array('property'=>'og:image'));
	      Yii::app()->clientScript->registerMetaTag('http://www.daveconservatoire.org/',null,null,array('property'=>'og:url'));
	      Yii::app()->clientScript->registerMetaTag('Dave Conservatoire - Learn about music for free',null,null,array('property'=>'og:title'));
	      Yii::app()->clientScript->registerMetaTag('Over 100 free music lessons and interactive exercises to help to find out how music works!' ,null,null,array('property'=>'og:description'));
	      Yii::app()->clientScript->registerMetaTag('website' ,null,null,array('property'=>'og:type'));
	      
	      
	      // Twitter Meta 
	      Yii::app()->clientScript->registerMetaTag('summary' ,null,null,array('name'=>'twitter:card'));
	      Yii::app()->clientScript->registerMetaTag('Dave Conservatoire' ,null,null,array('name'=>'twitter:url'));
	      Yii::app()->clientScript->registerMetaTag('Over 100 free music lessons and interactive exercises to help to find out how music works!' ,null,null,array('name'=>'twitter:description'));
	      Yii::app()->clientScript->registerMetaTag('http://www.daveconservatoire.org/images/logo.png',null,null,array('name'=>'twitter:image'));
	      Yii::app()->clientScript->registerMetaTag('@dconservatoire' ,null,null,array('name'=>'twitter:creator'));
	      Yii::app()->clientScript->registerMetaTag('@dconservatoire' ,null,null,array('name'=>'twitter:site'));

		if(!Yii::app()->user->isGuest):	
			$recentvids=UserVideoView::Model()->findAll(array("condition"=>"userId = ".Yii::app()->user->dcid, "limit"=>4, "order"=>"timestamp DESC"));
			$recentexs=UserExerciseAnswer::Model()->findAll(array("select"=>"t.exerciseId", "condition"=>"userId = ".Yii::app()->user->dcid, "limit"=>4, "order"=>"timestamp DESC", "distinct"=>true));
			$newlessons=Lesson::model()->findAll(array('condition'=>'filetype="l"', 'order'=>'timestamp DESC', 'limit'=>'10'));  
			$this->render('index',array('recentvids'=>$recentvids,'recentexs'=>$recentexs,'newlessons'=>$newlessons));
	    else:
			$newlessons=Lesson::model()->findAll(array('condition'=>'filetype="l"', 'order'=>'timestamp DESC', 'limit'=>'10'));  
			$this->render('index', array('newlessons'=>$newlessons));
		endif;
	}
	
	public function actionAbout()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('about');
	}
	
	public function actionOfficeHours()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('officehours');
	}
	
	
		public function actionsupport()
	{
	
		$this->render('support');
	}
			public function actionthankyou()
	{
	
		$this->render('thanks');
	}


	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$headers="From: {$model->email}\r\nReply-To: {$model->email}";
				mail(Yii::app()->params['adminEmail'],$model->subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}
	
		public function actionVideositemap()
	{
	
		$this->renderPartial('videositemap');
	}


	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
	
	   $service = Yii::app()->request->getQuery('service');
    if (isset($service)) {
        $authIdentity = Yii::app()->eauth->getIdentity($service);
        $authIdentity->redirectUrl = Yii::app()->user->returnUrl;
        $authIdentity->cancelUrl = $this->createAbsoluteUrl('site/login');
         
        if ($authIdentity->authenticate()) {
            $identity = new ServiceUserIdentity($authIdentity);
            // Successful login
            if ($identity->authenticate()) {
                
                Yii::app()->user->login($identity, 3600*24*7);
               
                // Special redirect with closing popup window
                $authIdentity->redirect(array('site/index'));
            }
            else {
                // Close popup window and redirect to cancelUrl
                $authIdentity->cancel();
            }
        }
         
        // Something went wrong, redirect to login page
        $this->redirect(array('site/login'));
    }
    
    //OLD LOGIN CODE FROM HERE!

	
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect('http://www.daveconservatoire.org/');
	}
}