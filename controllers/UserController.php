<?php


namespace app\controllers;
use app\models\UserJoinForm;
use app\models\UserRecord;
use yii\web\Controller;
use app\models\UserIdentity;
use yii;

class UserController extends Controller
{
    public function actionLogout(){
        Yii::$app->user->logout();
        return $this->redirect('/');
    }
    public function actionLogin()
    {
        $uid = UserIdentity::findIdentity(4);
        Yii::$app->user->login($uid);
        return $this -> render('login');
    }
    public function actionJoin()
    {

       // $userRec = new UserRecord();
       // $userRec->setTestUser();
       // $userRec->save();
        $userJoinForm = new UserJoinForm();
        $userJoinForm->name = 'jon';
        return $this -> render('join', compact('userJoinForm'));
    }


}