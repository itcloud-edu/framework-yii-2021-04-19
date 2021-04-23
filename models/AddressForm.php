<?php
namespace app\models;
use \yii\base\Model;

class AddressForm extends Model{
    public $name;

    public function rules()
    {
        // определение обязательных к заполнению полей и проверок на корректность
        return [
            ['name', 'required'],
            ['name', 'errorIsAddressNameExist']
        ];
    }

    public function setUserRecord($addressRecord){
        $this->name = $addressRecord->name;
    }

    public function errorIsAddressNameExist(){
            if (AddressRecord::existName($this->name))
                $this->addError('address', 'Этот адрес уже существует');
    }
}