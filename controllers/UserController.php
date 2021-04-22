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
        $uid = UserIdentity::findIdentity(1);
        Yii::$app->user->login($uid);

        return $this -> render('login');
    }

    public function actionLogout(){
        Yii::$app->user->logout($uid);
        return $this->redirect('/');
    }

    public function actionJoin()
    {
        //$userRec = new UserRecord();
        //$userRec->setTestUser();
        //$userRec->save();

        // нажали Commit и возвращается сюда
        // чтобы перерисовки ниже не было проверяем запрос Post
        if (Yii::$app->request->isPost) return $this->actionPost();

        $userJoinForm = new UserJoinForm();
        $userRecord = new UserRecord();
        $userRecord->setTestUser();

        $userJoinForm->setUserRecord($userRecord);

        //$userJoinForm->name = 'Join'; // автозаполнение
        return $this -> render('join',
        [
            'userJoinForm' => $userJoinForm
        ]);
        //return $this -> render('join', compact('userJoinForm')); //другой способ

    }

    public function actionInfo()
    {
        return $this -> render('info');
    }

    public function actionPost(){
        $userJoinForm = new UserJoinForm();
        $userJoinForm->load(Yii::$app->request->post());
        $userJoinForm->name = "mmmmmmmm";
        return $this -> render('join', compact('userJoinForm')); //другой способ
    }
}


