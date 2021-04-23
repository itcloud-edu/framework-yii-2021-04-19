<?php

namespace app\models;
use yii\db\ActiveRecord;

class AddressRecord extends ActiveRecord{
    public static function tableName()
    {
        return "address";
    }

    public function getPlaces(){
        return $this->hasMany(PlaceRecord::class, ['id_address' => 'id']);
    }

}