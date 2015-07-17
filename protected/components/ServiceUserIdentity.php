<?php
class ServiceUserIdentity extends CUserIdentity {
    const ERROR_NOT_AUTHENTICATED = 3;
 
    /**
     * @var EAuthServiceBase the authorization service instance.
     */
    protected $service;
     
    /**
     * Constructor.
     * @param EAuthServiceBase $service the authorization service instance.
     */
    public function __construct($service) {
        $this->service = $service;
    }
     
    /**
     * Authenticates a user based on {@link username}.
     * This method is required by {@link IUserIdentity}.
     * @return boolean whether authentication succeeds.
     */
    public function authenticate() {       
        if ($this->service->isAuthenticated) {
            $this->username = $this->service->getAttribute('name');
            
          
            $this->setState('username', $this->service->id);
            $this->setState('name', $this->username);
        
            $this->setState('service', $this->service->serviceName);
           
            
            
            $n=User::model()->count('username=:username', array(':username'=>$this->service->id));
            if($n<1){
            
            // This means this Facebook/Google/Email account hasn't logged in before.         
           
            if(!isset($_COOKIE['dc_tempusername'])) {
            
             // This code is for if there is no dctempusername set - should be rare. 
            $user=new User;
            $user->username=$this->service->id;
            $user->name= $this->username;
            $user->email= $this->service->email;
            $user->joinDate=time();
            $user->points=1;
            $user->save();
            }  else {
            
            // This will convert existing temp account to belong to this Facebook/Google/Email account
             
	        $user=User::model()->findByAttributes(array('username'=>$_COOKIE['dc_tempusername']));
	        $user->username=$this->service->id;
	        $user->name= $this->username;
            $user->email= $this->service->email;
            $user->joinDate=time();
            $user->biog="Please tell us about your musical interests and goals.  This will help develop the site to better support your learning.  It will not be made public.";
            $user->save();
	        // unset cookie
	      	unset(Yii::app()->request->cookies['dc_tempusername']);
	                       
            }
            
            }
            
            if($n==1) {
            $user = User::model()->findByAttributes(array('username'=>$this->service->id));
            $tempuser= User::model()->findByAttributes(array('username'=>$_COOKIE['dc_tempusername']));
            if($tempuser):
	            //updating temp records to join to user profile
	            UserVideoView::model()->updateAll(array('userId'=>$user->id), 'userId='.$tempuser->id);
	            UserExerciseAnswer::model()->updateAll(array('userId'=>$user->id), 'userId='.$tempuser->id);
	            
	            if($tempuser->subamount!=""):
	                $user->subamount=$tempuser->subamount;
	            endif;
	            
	            //also need to add points to existing total 
	            if($tempuser->points>1){
	            $user->points = ($user->points + $tempuser->points) -1;
	              $tempuser->delete();
	           
	          	unset(Yii::app()->request->cookies['dc_tempusername']);
	            }
	            endif;
	            $user->save();
	            
	            
	            //unset cookie and delete tempuser account
	            
	          
	            
	            
            }
            
            $criteria=new CDbCriteria;
			$criteria->select='id';  // only select the 'title' column
			$criteria->condition='username=:username';
			$criteria->params=array(':username'=>$this->service->id);
			$dcuser=User::model()->find($criteria); // $params is not needed
             $this->setState('dcid', $dcuser->id);
           
            $this->errorCode = self::ERROR_NONE;       
        }
        else {
            $this->errorCode = self::ERROR_NOT_AUTHENTICATED;
        }
        return !$this->errorCode;
    }
}
?>