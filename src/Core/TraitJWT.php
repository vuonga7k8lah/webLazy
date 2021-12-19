<?php

namespace webLazy\Core;

use Exception;
use Firebase\JWT\JWT;
use webLazy\Model\UserModel;

Trait TraitJWT
{
    private $key = 'vuongdttn-1998';

    /**
     * @throws Exception
     */
    public function verifyToken($token, $checkUser = false): bool
    {
        try {
            $oInfo = $this->decodeJWT($token);
            return UserModel::EmailIsExist($oInfo->email);
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), 401);
        }
    }

    public function decodeJWT($token): object
    {
        try {
            return JWT::decode($token, $this->key, ['HS256']);
        } catch (Exception $e) {
            echo HandleResponse::error($e->getMessage(), 401);
            die();
        }
    }

    /*
     * $time tính theo giờ
     */

    public function encodeJWT($aData): string
    {
        return JWT::encode($aData, $this->key);
    }

    public function setTime($time = ''): TraitJWT
    {
        JWT::$leeway = (!empty($time)) ? $time * 60 * 60 : 864000;
        return $this;
    }
}
