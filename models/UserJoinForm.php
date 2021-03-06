<?php

namespace app\models;
use yii\base\Model;

class UserJoinForm extends Model {

    public $name;
    public $email;
    public $password;
    public $password2;

    public function rules()
    {
        return [
            ['name', 'required'],
            ['email', 'required'],
            ['password', 'required'],
            ['password2', 'required'],
            ['name', 'string', 'min'=>4, 'max'=>30],
            ['email', 'email'],
            ['password', 'string', 'min'=>8, 'max'=>30],
            ['password2', 'compare', 'compareAttribute'=> 'password'],
            ['email', 'errorIsEmailUsed']
        ];
    }

    public function setUserRecord($userRecord){
        $this->name = $userRecord-> name;
        $this->email = $userRecord-> email;
        $this->password = $this->password2 = '123456789';
    }

    public function errorIsEmailUsed() {
        if (UserRecord::existEmail($this->email))
            $this->addError('email', 'This mail already exists');
    }
}