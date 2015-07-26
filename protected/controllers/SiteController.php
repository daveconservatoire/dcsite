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
		
	      Yii::app()->clientScript->registerMetaTag('http://www.daveconservatoire.org/images/dclogo.jpg',null,null,array('property'=>'og:image'));
	      Yii::app()->clientScript->registerMetaTag('http://www.daveconservatoire.org',null,null,array('property'=>'og:url'));
	      Yii::app()->clientScript->registerMetaTag('Dave Conservatoire',null,null,array('property'=>'og:title'));
	      Yii::app()->clientScript->registerMetaTag('Welcome to Dave Conservatoire - a free online music school, 
aiming to provide a world-class music education for everyone.' ,null,null,array('property'=>'og:description'));
	      Yii::app()->clientScript->registerMetaTag('website' ,null,null,array('property'=>'og:type'));
	      
	      
	      // Twitter Meta 
	      Yii::app()->clientScript->registerMetaTag('summary' ,null,null,array('name'=>'twitter:card'));
	      Yii::app()->clientScript->registerMetaTag('Dave Conservatoire' ,null,null,array('name'=>'twitter:url'));
	      Yii::app()->clientScript->registerMetaTag('Welcome to Dave Conservatoire - a free online music school, 
aiming to provide a world-class music education for everyone.' ,null,null,array('name'=>'twitter:description'));
	      Yii::app()->clientScript->registerMetaTag('http://www.daveconservatoire.org/images/logo.png',null,null,array('name'=>'twitter:image'));
	      Yii::app()->clientScript->registerMetaTag('@dconservatoire' ,null,null,array('name'=>'twitter:creator'));
	      Yii::app()->clientScript->registerMetaTag('@dconservatoire' ,null,null,array('name'=>'twitter:site'));
	      
$courses=Course::model()->findAll(array('order'=>'id ASC'));
$this->pageTitle='Home | '.Yii::app()->name ;


		if(Yii::app()->user->isGuest):	
            
			$this->render('index',array('courses'=>$courses));
	    else:
	    $user=User::model()->findByPk(Yii::app()->user->dcid);
	    $videosviewedarray = array();
	    	foreach ($user->videosviewed as $videoviewed):
	    		   if(!in_array($videoviewed->lesson->topicno, $videosviewedarray)){
                         $videosviewedarray[]=$videoviewed->lesson->topicno;
                   }
	    	endforeach;
	    	
	   
	   $exercisesansweredarray = array();
	    	foreach ($user->exercisesanswered as $exerciseanswered):
	    		   if(!in_array($exerciseanswered->exercise->topicno, $exercisesansweredarray)){
                         $exercisesansweredarray[]=$exerciseanswered->exercise->topicno;
                   }
	    	endforeach;
	    	
		$this->render('index', array('courses'=>$courses,'videosviewedarray'=>$videosviewedarray,'exercisesansweredarray'=>$exercisesansweredarray));
		endif;
	}
	
	public function actionAbout()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('about');
	}
	

	

	
	
		public function actionDonate()
	{
	
		$this->render('donate');
	}
			public function actionThanks()
	{
			if(Yii::app()->user->isGuest && isset(Yii::app()->request->cookies['dc_tempusername']) && $_GET['st']=="Completed"):	
		     $user=User::model()->findByAttributes(array('username'=>$_COOKIE['dc_tempusername']));
		     $user->subamount=$_GET['amt'];
		     $user->subupdated=date("Y-m-d H:i:s");
		     $user->save();
		endif;
		
		if(!Yii::app()->user->isGuest && $_GET['st']=="Completed"):	
		     $user=User::model()->findByPk(Yii::app()->user->dcid);
		     $user->subamount=$_GET['amt'];
		     $user->subupdated=date("Y-m-d H:i:s"); 
		     $user->save();
		endif;
	
		$this->render('thanks');
	}
	
				public function actionPatronthanks()
	{
	
		$this->render('patreonthanks');
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
	
			public function actionSubrequest()
	{
	
		$this->render('subrequest');
	}
	
	

			public function actionSocialmedia()
	{
		if(Yii::app()->user->isGuest && isset(Yii::app()->request->cookies['dc_tempusername'])):	
		     $user=User::model()->findByAttributes(array('username'=>$_COOKIE['dc_tempusername']));
		     if($user->subamount==""):
		     $user->subamount=0;
		     endif;
		     $user->subupdated=date("Y-m-d H:i:s");
		     $user->save();
		endif;
		
		if(!Yii::app()->user->isGuest):	
		     $user=User::model()->findByPk(Yii::app()->user->dcid);
		        if($user->subamount==""):
		     $user->subamount=0;
		     endif;
		    
		     $user->subupdated=date("Y-m-d H:i:s");
		     $user->save();
		endif;
		
	
		$this->render('socialmedia');
	}
	
				public function actionSocialloader($service)
	{
		if(Yii::app()->user->isGuest && isset(Yii::app()->request->cookies['dc_tempusername'])):	
		    $user=User::model()->findByAttributes(array('username'=>$_COOKIE['dc_tempusername']));
		endif;

		
		if(!Yii::app()->user->isGuest):	
		     $user=User::model()->findByPk(Yii::app()->user->dcid);
		endif;
		
		if (isset($user)):
		     $user->socialshare=$service;
		     $user->save();
		     
		endif;

		
		if($service=="facebook"):
		    $this->redirect('https://www.facebook.com/sharer/sharer.php?u=www.daveconservatoire.org');
		endif;
		
			if($service=="twitter"):
		    $this->redirect('https://twitter.com/home?status=Learn%20music%20for%20free%20online%20at%20www.daveconservatoire.org%20-%20more%20at%20%40dconservatoire');
		endif;
		
			if($service=="gplus"):
		    $this->redirect('https://plus.google.com/share?url=www.daveconservatoire.org');
		endif;
	
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
		unset(Yii::app()->request->cookies['dc_tempusername']);
		
		if (Yii::app()->request->baseUrl=="/dcsite"):
		$this->redirect(Yii::app()->request->baseUrl);
		else:
		$this->redirect('http://www.daveconservatoire.org');
		endif;
		
	
	                       
	}
}