<?php

namespace app\controllers;
use yii;
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

    public function actionsAddress()
    {
        return $this -> render('address', compact('addressForm'));

    }
}