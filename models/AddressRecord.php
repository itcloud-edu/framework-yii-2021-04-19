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
    public function getPlace()
    {
        return $this->hasMany(PlaceRecord::class, ['id'=>'id_address']);
    }
}