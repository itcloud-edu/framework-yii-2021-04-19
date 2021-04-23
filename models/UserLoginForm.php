<?php
namespace app\models;
use \yii\base\Model;
use yii;

class UserLoginForm extends Model{
    public $email;
    public $password;
    private $userRecord;

    public function rules()
    {
        // определение обязательных к заполнению полей и проверок на корректность
        return [
            ['email', 'required'],
            ['password', 'required'],
            ['email', 'email', 'message' => 'Не верный E-Mail'],
            ['email', 'errorIfEmailFound'], // функция проверки существования email, объявлена ниже
            ['password', 'errorIsPasswordWrong']
        ];
    }

    public function errorIfEmailFound(){
        $this->userRecord = UserRecord::findUserByEmail($this->email);
        if ($this->userRecord == null)
            $this->addError('email', 'EMail не найден');
    }

    public function errorIsPasswordWrong(){
        if ($this->hasErrors()) // проверка на предыдущие ошибки
            return;

        if (!$this->userRecord->validatePassword($this->password))
            $this->addError('password', 'Неверный пароль');
    }

    public function Login(){
        if ($this->hasErrors())
            return;
        $userIdentity = UserIdentity::findIdentity($this->userRecord->id);
        Yii::$app->user->login($userIdentity);
    }

}