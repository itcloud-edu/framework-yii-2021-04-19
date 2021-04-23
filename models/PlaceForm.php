<?php
namespace app\models;
use yii\base\Model;
use app\models\AddressRecord;

class PlaceForm extends Model
{
    public $name;
    public $organization;
    public $supervisor;
    public $id_address;


    public function rules()
    {
        return [
            ['name', 'required'],
            ['organization', 'required'],
            ['supervisor', 'required'],
            ['id_address', 'required'],

        ];
    }
}
