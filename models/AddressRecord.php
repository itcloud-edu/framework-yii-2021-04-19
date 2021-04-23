<?php

namespace app\models;

use yii\db\ActiveRecord;
use app\models\PlaceRecord;


class AddressRecord extends ActiveRecord
{

    public static function tableName()
    {
        return "address";
    }

    public static function existName($name)
    {
        return static::find()->where(['name'=>$name])->count() > 0;
    }

    public static function getAddressList()
    {
        return static::find()->asArray()->all();
    }

    public function setNameForm($addressForm)
    {
        $this->name = $addressForm->name;
    }



    public function getPlases()
    {
        return $this->hasMany(PlaceRecord::class, ['id_address'=>'id']);
    }

}