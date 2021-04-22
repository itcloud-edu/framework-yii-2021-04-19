<?php

use app\modules\UserRecord;
use yii\web\IdentityInterface;

class UserIdentity extends UserRecord implements  IdentityInterfacepublic static function findIdentity($id)
{
    // TODO: Implement findIdentity() method.
}

    public static function findIdentityByAccessToken($token, $type = null)
    {
       static::findOne($id);
    }

    public function getId()
    {
        // TODO: Implement getId() method.
    }

    public function getAuthKey()
    {
        // TODO: Implement getAuthKey() method.
    }

    public function validateAuthKey($authKey)
    {
        // TODO: Implement validateAuthKey() method.
    }
