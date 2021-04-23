<?php

namespace app\models;
use yii\db\ActiveRecord;
use yii;


class UserRecord extends ActiveRecord{

    public static function tableName()
    {
        return "user";
    }

    public function setTestUser()
    {
        $faker = \Faker\Factory::create();
        $this->name = $faker-> name;
        $this->email = $faker -> email;
        $this->passhash = $faker -> city;
    }

    public static function existEmail($email)
    {
        return static::find()->where(['email'=>$email])->count() > 0;
    }

    public static function findUserByEmail($email)
    {
        return static::findOne(['email'=>$email]);
    }

    public function setUserJoinForm($userJoinForm)
    {
        $this->name = $userJoinForm->name;
        $this->email = $userJoinForm->email;
        $this->setPassword($userJoinForm->password);
        $this->status = 2;
    }
    public function setPassword($password)
    {
        $this->passhash = Yii::$app->security->generatePasswordHash($password);
    }

    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->passhash);
    }
}




















