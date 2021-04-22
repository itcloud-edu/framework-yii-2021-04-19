<?php


namespace app\controllers;
use app\models\UserJoinForm;
use app\models\UserLoginForm;
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
       // $uid = UserIdentity::findIdentity(4);
       // Yii::$app->user->login($uid);
       if(Yii::$app->request->isPost)
            return $this->actionLoginPost();
        $userLoginForm = new UserLoginForm();
        //$userLoginForm->setUserRecord($userRecord);
        return $this->render('login', compact('userLoginForm'));
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
        if($userJoinForm->load(Yii::$app->request->post()))
            if ($userJoinForm->validate()) {
                $userRecord = new UserRecord();
                $userRecord->setUserJoinForm($userJoinForm);
                $userRecord->save();
                return $this->redirect('/user/login');
            }
        return $this->render('join', compact('userJoinForm'));
    }

    public function actionLoginPost(){
        $userLoginForm = new UserLoginForm();
        if($userLoginForm->load(Yii::$app->request->post()))
            if ($userLoginForm->validate()) {
               $userLoginForm->login();
               // return $this->redirect('/');
            }
        return $this->render('login', compact('userLoginForm'));
    }
}