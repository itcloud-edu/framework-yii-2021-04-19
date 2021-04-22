<?php

namespace app\controllers;
use app\models\UserLoginForm;
use yii;
use app\models\UserIdentity;
use app\models\UserRecord;
use yii\base\BaseObject;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionLogin()
    {
        //$uid = UserIdentity::findIdentity(1);
        //Yii::$app->user->login($uid);

        //if (Yii::$app->request->isPost) return $this->actionJoinPost();

        $userLoginForm = new UserLoginForm();

        return $this -> render('login',
            [
                'userLoginForm' => $userLoginForm
            ]);

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
        if (Yii::$app->request->isPost) return $this->actionJoinPost();

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

    public function actionJoinPost(){
        $userJoinForm = new UserJoinForm();
        if ($userJoinForm->load(Yii::$app->request->post()))
            if ($userJoinForm->validate()){
                $userRecord = new UserRecord();
                $userRecord->setUserJoinForm($userJoinForm);
                $userRecord->save();
                return $this->redirect('/user/login');
            }

        return $this -> render('join', compact('userJoinForm')); //другой способ
    }
}


