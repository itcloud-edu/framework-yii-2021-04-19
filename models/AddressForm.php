<?php

namespace app\models;
use yii;
use yii\base\Model;
use app\models\AddressRecord


class UserLoginForm extends Model {

    public $email;
    public $password;
    private $userRecord;

    public function rules()
    {
        return [
            ['name', 'required'],
            ['name', 'errorIsAddressNameExist'],
            ['email', 'email'],
            ['email', 'errorIFEmailNotFound'],
            ['password', 'errorIsPasswordWrong']
        ];
    }
    public function errorIsAddressNameExist() {
        if (UserRecord::existName($this->name))
            $this->addError('email', 'This mail already exists');
    }
}