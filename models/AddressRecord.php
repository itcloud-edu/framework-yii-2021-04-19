<?php

namespace app\models;
use yii\db\ActiveRecord;

class AddressRecord extends ActiveRecord
{
    public static function tableName()
    {
        return "address";
    }
    public function getPlace()
    {
        return $this->hasMany(PlaceRecord::className(), ['id'=>'id_address']);
    }
}