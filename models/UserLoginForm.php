<?php

namespace app\models;
use yii;
use yii\base\Model;

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
        if ($this->hasError())
            return;
        if ($this->userRecord->validatePassword($this->password))
            $this->addError('password', 'This password is wrong');
    }

    public function login()
    {
        if ($this->hasError())
            return;
        $userIdentity = UserIdentity::findIdentity($this->userRecord->id);
        Yii::$app->user->login($userIdentity);

    }
}