<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
	public $extraDesc="";
	public $extraKeywords="";
	
	public $tempuserid="";
	
	public function init() {
	
	

				if(!Yii::app()->user->isGuest):
		     $user = User::model()->findByAttributes(array('id'=>Yii::app()->user->dcid));
		     
		   if(Yii::app()->urlManager->parseUrl(Yii::app()->request)!="site/socialmedia" && Yii::app()->urlManager->parseUrl(Yii::app()->request)!="site/thanks" && Yii::app()->urlManager->parseUrl(Yii::app()->request)!="site/login"):
		     if($user->subamount=="" && Yii::app()->urlManager->parseUrl(Yii::app()->request)!="site/subscribe"):
		     
		       $this->redirect(array("site/subscribe"));
		       endif;
		       
		       
		       if((date('U')-strtotime($user->subupdated)>604804) && $user->subamount=="0" &&Yii::app()->urlManager->parseUrl(Yii::app()->request)!="site/subscribe"):
		          $this->redirect(array("site/subscribe"));
		       
		       endif;
		       
		    
		    endif;
		endif;
		

	}
	
		
		}