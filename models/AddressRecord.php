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
    public function getPlases()
    {
        return $this->hasMany(PlaceRecord::class, ['id_address'=>'id']);
    }
}










