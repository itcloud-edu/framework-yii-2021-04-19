<?php

namespace app\controllers;
use app\models\AddressForm;
use app\models\AddressRecord;
use yii;
use yii\base\BaseObject;
use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
        return $this -> render('index');
    }
    public function actionAbout()
    {
        return $this -> render('about');
    }
    public function actionAddress()
    {
        if (Yii::$app->request->isPost)
            return $this->actionAddressPost();

        $addressForm = new AddressForm();
        $addressList = AddressRecord::getAddressList();

        return $this->render('address',  compact('addressForm', 'addressList'));
    }

    private function actionAddressPost()
    {
        $addressForm = new AddressForm();
        if ($addressForm->load(Yii::$app->request->post()))
            if ($addressForm->validate()) {
                $addressRecord = new AddressRecord();
                $addressRecord->setNameForm($addressForm);
                $addressRecord->save();
            }
        $addressList = AddressRecord::getAddressList();

        return $this->render('address',  compact('addressForm', 'addressList'));
    }

}