<?php
class ApplicationBehavior extends CBehavior
{       private $_owner;
        
        public function events() 
        {

                    return  array(
                               'onBeginRequest'=>'setCookies',     
                                
                        );
        }
        
        public function setCookies()
       {

                $owner=$this->getOwner();
             
                       if ($owner->user->getIsGuest() && !isset(Yii::app()->request->cookies['dc_tempusername'])):
			$tempusername=genRandomString(20);
			
			$tempuser=new User();
			$tempuser->username=$tempusername;
			$tempuser->email="noemailyet@tempuser.com";
			$tempuser->name=Yii::app()->request->cookies['dc_tempusername']->value;
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
?>