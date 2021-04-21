<?php

namespace app\models;
use yii\db\ActiveRecord;

class UserRec extends ActiveRecord{

    public static function tableName()
    {
        return "USER";
    }

    public function setTestUser(){
        $faker = \Faker\Factory::create();


        $this->name ='John';
        $this->email ='jj@gmail.com';
        $this->passhash = 'asdasdsdf';
    }


}