<?php

namespace app\controllers;
use app\models\UserRec;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionLogin()
    {
        return $this -> render('login');
    }
    public function actionJoin()
    {
        $userRec = new UserRec();
        $userRec->setTestUser();
        $userRec->save();

        return $this -> render('join');
    }


}