<?php

namespace app\models;
use yii\db\ActiveRecord;

class AddressRecord extends ActiveRecord{
    public static function tableName()
    {
        return "address";
    }

    public static function existName($name){
        return static::find()->where(['name' => $name]) -> count() > 0;
    }

    public function setNameForm(AddressForm $addressForm){
        $this->name = $addressForm->name;
    }



    public function getPlaces(){
        return $this->hasMany(PlaceRecord::class, ['id_address' => 'id']);
    }


}