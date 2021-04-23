<?php
namespace  app\models;
use Faker\Provider\Address;
use yii\db\ActiveRecord;

class PlaseRecord extends  ActiveRecord{

    public static  function tableName()
    {
        return 'plase';
    }

    public function getIPlases(){
        return $this->hasOne(AdressRecord::ClassName(), ['id'=> 'id_adress']);
    }

}