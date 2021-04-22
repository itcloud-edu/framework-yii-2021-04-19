<?php

namespace app\models;
use yii\db\ActiveRecord;


class UserRecord extends ActiveRecord{

    public static function tableName()
    {
        return "user";
    }

    public function setTestUser(){
        $faker = \Faker\Factory::create();
        $this->name = $faker-> name;
        $this->email = $faker -> email;
        $this->passhash = $faker -> city;
    }

    public static function existEmail($email){
        return static::find()->where(['email'=>$email])->count() > 0;
    }

    public function setUserJoinForm($userJoinForm)
    {
        $this->name = $userJoinForm->name;
        $this->email = $userJoinForm->email;
        $this->passhash = $userJoinForm->password;
        $this->status = 2;
    }
}