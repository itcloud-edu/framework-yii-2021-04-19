<?php

namespace app\models;

use yii\db\ActiveRecord;
use app\models\AddressRecord;


class PlaceRecord extends ActiveRecord
{

    public static function tableName()
    {
        return "place";
    }



    public static function getPlaceList()
    {

        $list = static::find()->asArray()->all();
        foreach ($list as &$item){
            $item['addressData'] = static::findOne($item['id'])-> getAddress()->asArray()->all();

        }
        unset($item);

        return $list;
    }


    public function getAddress()
    {
        return $this->hasOne(AddressRecord::class, ['id'=>'id_address']);
    }
}

