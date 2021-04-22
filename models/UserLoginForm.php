<?php
namespace app\models;
use \yii\base\Model;

class UserLoginForm extends Model{
    public $email;
    public $password;

    public function rules()
    {
        // определение обязательных к заполнению полей и проверок на корректность
        return [
            ['email', 'required'],
            ['password', 'required']
        ];
    }

}