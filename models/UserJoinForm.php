<?php
namespace app\models;
use yii\base\Model;
class UserJoinForm extends Model{
    public $name;
    public $email;
    public $password;
    public $password2;
    public function rules()
    {
        return [
            ['name', 'required'] ,
            ['email', 'required'] ,
            ['password', 'required'] ,
            ['password2', 'required'] ,
            ['name', 'string', 'min'=>4, 'max' => 30],
            ['email', 'email',],
            ['password', 'string', 'min'=>8, 'max' => 30 ],
            ['password', 'compare', 'compareAttribute' => 'password2' ],
            ['email', 'errorIsEmailUser']
        ];
    }
    public function setUserRecord($userRecord){
        $this->name     = $userRecord->name;
        $this->email    = $userRecord->email;
        $this->password = $this->password2 = '123456789';
    }
    public function errorIsEmailUser(){
        if (UserRecord::existByEmail($this->email))
            $this->addError('email', 'Такой  email существует');
    }
}
