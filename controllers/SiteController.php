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

        return $this->render('address',  compact('addressForm'));
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
        return $this->render('address',  compact('addressForm'));
    }

    public function actionsAddress()
    {
        return $this -> render('address', compact('addressForm'));

    }
}