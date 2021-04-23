<?php

namespace app\models;
use yii\db\ActiveRecord;

class PlaceRecord extends ActiveRecord{
    public static function tableName()
    {
        return "place";
    }

    public function getIdAddress(){
        return $this->hasOne(AddressRecord::class, ['id' => 'id_address']);
    }

}