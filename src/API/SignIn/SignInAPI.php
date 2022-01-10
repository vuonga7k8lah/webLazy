<?php

namespace webLazy\API\SignIn;

use Exception;
use webLazy\Core\HandleResponse;
use webLazy\Core\TraitJWT;
use webLazy\Core\TraitPHPMailer;
use webLazy\Database\DB;
use webLazy\Model\SignInModel;

class SignInAPI
{
    use TraitJWT;

    public function handleLogin()
    {
        $aData = $_POST;
        try {
            if (!isset($aData['Email']) || (!isset($aData['Password']))) {
                throw new Exception('the param username or password is required');
            }
            $aData['Email'] = DB::notInjection(trim($_POST['Email']));
            $aData['Password'] = DB::notInjection(trim(sha1($_POST['Password'])));
            if (SignInModel::loginUser($aData)[0] > 0) {
                echo HandleResponse::success('Passed', [
                    'token' => SignInModel::loginUser($aData)[1]['token']
                ]);
            } else {
                throw new Exception("Sorry, the username or password is error", 400);
            }
        } catch (Exception $exception) {
            echo HandleResponse::error($exception->getMessage(), $exception->getCode());
        }
    }
}
