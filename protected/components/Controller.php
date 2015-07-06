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
	
			    
			
		
		if (Yii::app()->user->isGuest && !isset(Yii::app()->request->cookies['dc_tempusername'])):
			$tempusername=genRandomString(20);
			
			$tempuser=new User();
			$tempuser->username=$tempusername;
			$tempuser->email="noemailyet@tempuser.com";
			$tempuser->name="Temp User - ".$tempusername;
			$tempuser->points=1;
			$tempuser->firstip=$_SERVER['REMOTE_ADDR'];
			if($tempuser->validate()){
			Yii::app()->request->cookies['dc_tempusername'] = new CHttpCookie('dc_tempusername', $tempusername);
			$cookie = new CHttpCookie('dc_tempusername', $tempusername);
            $cookie->expire = time()+60*60*24*180; 
            Yii::app()->request->cookies['dc_tempusername'] = $cookie;
			$tempuser->save();
			}
			else{
				echo CHtml::errorSummary($tempuser);
			}
		endif;


		
	
		}
		
		}