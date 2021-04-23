<?php

namespace app\controllers;
use app\models\AddressForm;
use app\models\AddressRecord;
use app\models\PlaceForm;
use app\models\PlaceRecord;
use yii;
use yii\base\BaseObject;
use yii\web\Controller;

class PlaceController extends Controller
{
    public function actionIndex()
    {

        $placeList = PlaceRecord::getPlaceList();
        return $this -> render('index' , compact('placeList'));
    }

    public function actionInfo(){

        if (Yii::$app->request->get('id'))
            $place = PlaceRecord::findOne(Yii::$app->request->get('id'));
            $address = $place->getAddress()->asArray()->all();
            $address = $address[0];

        return $this -> render('info' , compact('place', 'address'));
    }

    public function actionEdit (){
       if (Yii::$app->request->isPost)
          return $this->actionEditPost();


        if (Yii::$app->request->get('id'))
            $place = PlaceRecord::findOne(Yii::$app->request->get('id'));
            $address = $place->getAddress()->asArray()->all();
            $address = $address[0];
            $placeForm = new PlaceForm();
            $placeForm->name = $place->name;
            $placeForm->organization = $place->organization;
            $placeForm->supervisor = $place->supervisor;
            $placeForm->id_address = $place->id_address;
            $addressList = AddressRecord::getAddressList();
//            $addressList = $addressList[0];
            $list = array();
            foreach ($addressList as $item){
                $list["".$item['id'].""] = $item['name'];
            }

        return $this -> render('edit' , compact('placeForm', 'address' , 'list'));
    }

    private function actionEditPost()
    {
        $place = PlaceRecord::findOne(Yii::$app->request->get('id'));
        $placeForm = new PlaceForm();
        $placeForm->load(Yii::$app->request->post());
        $place->name = $placeForm->name;
        $place->organization = $placeForm->organization;
        $place->supervisor = $placeForm->supervisor;
        $place->id_address = $placeForm->id_address;
        $place->save();

        return $this->redirect('/place/info?id='. Yii::$app->request->get('id'));
    }

}