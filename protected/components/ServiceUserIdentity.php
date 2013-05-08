<?php
class ServiceUserIdentity extends UserIdentity {
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
            $user=new User;
            $user->username=$this->service->id;
            $user->name= $this->username;
            $user->email= $this->service->email;
            $user->joinDate=time();
            $user->points=1;
            $user->save();
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