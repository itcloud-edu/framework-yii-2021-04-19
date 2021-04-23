<?php

namespace app\controllers;
use app\models\UserJoinForm;
use app\models\UserLoginForm;
use yii;
use app\models\UserIdentity;
use app\models\UserRecord;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionLogin()
    {
        if (Yii::$app->request->isPost)
            return $this->actionLoginPost();
        $userLoginForm = new  UserLoginForm();

        return $this -> render('login' ,  compact('userLoginForm'));
    }
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this -> redirect('/');
    }

    private function actionLoginPost()
    {
        $userLoginForm = new UserLoginForm();
        if ($userLoginForm->load(Yii::$app->request->post()))
            if ($userLoginForm->validate()) {
                $userLoginForm->login();
                return $this->redirect('/');
            }
        return $this -> render('login' ,  compact('userLoginForm'));
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
        if ($userJoinForm->load(Yii::$app->request->post()))
            if ($userJoinForm->validate()) {
                $userRecord = new UserRecord();
                $userRecord->setUserJoinForm($userJoinForm);
                $userRecord->save();
                return $this -> redirect('/user/login');
            }
        return $this -> render('join', compact('userJoinForm'));
    }


}