<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    private $_id;
    public function authenticate()
    {
        $record=User::model()->findByAttributes(array('NamaUser'=>$this->username));
        if($record===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if($record->Password!== md5($this->password))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->_id=$record->UserID;
			$this->username=$record->NamaUser;
            $this->errorCode=self::ERROR_NONE;
			$this->setPersistentStates(array(
                'password' => $this->password,
                // set any other user data
                //'id' => $record->UserID,
            ));
        }
        return !$this->errorCode;
    }
 
    public function getId()
    {
        return $this->_id;
    }
            public function getLevel(){
                return $this->record->level;
        }
    
}