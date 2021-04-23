<?php
namespace app\models;
use yii\base\Model;
use app\models\AddressRecord;

class AddressForm extends Model
{
    public $name;


    public function rules()
    {
        return [
            ['name', 'required'],
            ['name', 'errorIsAddressNameExist']
        ];
    }


    public function errorIsAddressNameExist() {
        if (AddressRecord::existName($this->name))
            $this->addError('email', 'This Address Name already exists');
    }
}
