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
	
			
		
			    
			
		
		if (Yii::app()->user->isGuest&& !isset($_COOKIE['dc_tempusername'])):
			$tempusername=genRandomString(20);
			$tempuser=new User();
			$tempuser->username=$tempusername;
			$tempuser->email="noemailyet@tempuser.com";
			$tempuser->name="Temp User - ".$tempusername;
			$tempuser->points=1;
			if($tempuser->validate()){
			setcookie("dc_tempusername",$tempusername, time() + (10 * 365 * 24 * 60 * 60));
			$tempuser->save();
			}
			else{
				echo CHtml::errorSummary($tempuser);
			}
		endif;

echo $_COOKIE['dc_tempusername'];	
		
	
		}
		
		}