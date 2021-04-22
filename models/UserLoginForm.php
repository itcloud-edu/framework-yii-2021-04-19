<?php
namespace app\models;
use yii\base\Model;
use yii;
class UserLoginForm extends Model{
    private $userRecord;
    public $email;
    public $password;


    public function rules()
    {
        return [
            ['email', 'required'] ,
            ['password', 'required'] ,
            ['email', 'email',],
            ['email', 'errorIsEmailFound'],
            ['password', 'errorIsPasswordWrong']
        ];
    }

    public function errorIsEmailFound(){
        $this->userRecord = UserRecord::findUserByEmail($this->email);
        if ($this->userRecord == NULL)
            $this->addError('email', 'This email not found');
    }

    public function login(){
        if($this->hasErrors())
            return;
        $userIdentity = UserIdentity::findIdentity($this->userRecord->id);
        Yii::$app->user->login($userIdentity);

    }
    public function errorIsPasswordWrong(){
        if($this->hasErrors())
            return;
        if($this->userRecord->passhash != $this->password)
            $this->addError('password', 'This password is  wrong');
    }
}
