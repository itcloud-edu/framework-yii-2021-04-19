<?php

namespace app\controllers;
use yii;
use yii\web\Controller;


class SiteController extends Controller
{
    public function actionIndex()
    {
        Yii::trace('Новое сообщение', 'user_trace');
        return $this -> render('index');
    }
    public function actionAbout()
    {
        return $this -> render('about');
    }

}