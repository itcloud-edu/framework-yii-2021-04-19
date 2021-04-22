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
        $uid = UserIdentity::findIdentity(mt_rand(1,13));
        Yii::$app->user->login($uid);
        return $this -> render('login');
    }
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this -> redirect('/');
    }
    public function actionJoin()
    {
//        $userRecord = new UserRecord();
//        $userRecord->setTestUser();
//        $userRecord->save();

        return $this -> render('join');
    }


}