<?php

namespace app\controllers;
use yii;
use app\models\UserIdentity;
use app\models\UserRecord;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionLogin()
    {
        return $this -> render('login');
    }
    public function actionJoin()
    {


//        $userRecord = new UserRecord();
//        $userRecord->setTestUser();
//        $userRecord->save();
        $uid = UserIdentity::findIdentity(12);
        Yii::$app->user->login($uid);
        return $this -> render('join');
    }


}