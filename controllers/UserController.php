<?php

namespace app\controllers;
use app\models\UserJoinForm;
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
        if (Yii::$app->request->isPost)
            return $this->actionJoinPost();

        $userJoinForm = new UserJoinForm();
        $userRecord = new UserRecord();
        $userRecord->setTestUser();
        $userJoinForm->setUserRecord($userRecord);

        return $this -> render('join', compact('userJoinForm'));
    }

    public function actionJoinPost()
    {
        $userJoinForm = new UserJoinForm();
        $userJoinForm->load(Yii::$app->request->post());
        return $this -> render('join', compact('userJoinForm'));
    }



}