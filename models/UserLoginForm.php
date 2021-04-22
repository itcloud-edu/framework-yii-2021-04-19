<?php

namespace app\models;
use yii\base\Model;
use yii;

class UserLoginForm extends Model {

    public $email;
    public $password;
    private $userRecord;

    public function rules()
    {
        return [
            ['email', 'required'],
            ['password', 'required'],
            ['email', 'email'],
            ['email', 'errorIFEmailNotFound'],
            ['password', 'errorIsPasswordWrong']
        ];
    }

    public function errorIFEmailNotFound() {
        $this->userRecord = UserRecord::findUserByEmail($this->email);
        if ( $this->userRecord == null)
            $this->addError('email', 'This mail not found');
    }

    public function errorIsPasswordWrong() {
        if ($this->hasErrors())
            return;
        if ( $this->userRecord->passhash != $this->password)
            $this->addError('password', 'This password is wrong');
    }

    public function login()
    {
        if ($this->hasErrors())
            return;
        $userIdentity = UserIdentity::findIdentity($this->userRecord->id);
        Yii::$app->user->login($userIdentity);

    }
}