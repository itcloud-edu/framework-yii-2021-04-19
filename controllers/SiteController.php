<?php

namespace app\controllers;
use yii;
use yii\web\Controller;
use yii;

class SiteController extends Controller
{
    public function actionIndex()
    {
        Yii::trace('Я нвове сообщение', 'user_trace');
        return $this -> render('index');
    }
    public function actionAbout()
    {
        return $this -> render('about');
    }



}

