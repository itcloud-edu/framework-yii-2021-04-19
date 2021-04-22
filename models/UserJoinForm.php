<?php
namespace app\models;
use \yii\base\Model;

class UserJoinForm extends Model{
    public $name;
    public $email;
    public $password;
    public $password2;

    public function rules()
    {
        // определение обязательных к заполнению полей и проверок на корректность
        return [
            ['name', 'required'],
            ['email', 'required'],
            ['password', 'required'],
            ['password2', 'required'],
            ['name', 'string', 'min' => 4, 'max' => 30],
            ['email', 'email', 'message' => 'Не верный E-Mail'],
            ['password', 'string', 'min' => 8, 'max' => 30],
            ['password2', 'compare', 'compareAttribute' => 'password', 'message' => 'Пароли не совпадают'],
            ['email', 'errorIsEmailUsed'] // функция проверки существования email, объявлена ниже
        ];
    }

    public function setUserRecord($userRecord){
        $this->name = $userRecord->name;
        $this->email = $userRecord->email;
        $this->password = $this->password2 = '12345678';
    }

    public function errorIsEmailUsed(){
            if (UserRecord::existEmail($this->email))
                $this->addError('email', 'Этот EMail уже существует');
    }
}