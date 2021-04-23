<?php
namespace  app\models;
use Faker\Provider\Address;
use yii\db\ActiveRecord;

class AdressRecord extends  ActiveRecord{

    public static  function tableName()
    {
        return 'adress';
    }

    public function getIdAdress(){
        return $this->hasOne(PlaseRecord::ClassName(), ['id_adress'=> 'id']);
    }

}