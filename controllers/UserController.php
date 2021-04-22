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
      if(Yii::$app->request->isPost)
          return $this->actionJoinPost();

      $userRecord = new UserRecord();
      $userRecord->setTestUser();
      $userJoinForm = new UserJoinForm();
      $userJoinForm->setUserRecord($userRecord);
      return $this->render('join', compact('userJoinForm'));

    }
    public function actionJoinPost(){
        $userJoinForm = new UserJoinForm();
        $userJoinForm->load(Yii::$app->request->post());
        if ($userJoinForm->validate()) $userJoinForm->name . '.!.';
        return $this->render('join', compact('userJoinForm'));
    }


}