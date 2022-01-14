<?php

namespace webLazy\API\Order;

use Exception;
use webLazy\Core\HandleResponse;
use webLazy\Core\Request;
use webLazy\Core\TraitJWT;
use webLazy\Model\OrderModel;
use webLazy\Model\SignInModel;
use webLazy\Model\UserModel;

class OrderAPI
{
    use TraitJWT;

    public function getOrder()
    {
        $token = $this->getTokenHeaders();
        try {
            $orderID=Request::uri()[1];
            if ($this->verifyToken($token)) {
                $oInfo = $this->decodeJWT($token);
                $aUser = UserModel::getInfoAdmin($oInfo->email);
                $aOrders = OrderModel::getOrderWithUserID($aUser['MaKH'],$orderID);
                if (empty($aOrders)) {
                    throw new Exception("Sorry, the user not access",400);
                }
                foreach ($aOrders as $item) {
                    $aData[] = [
                        'TenKH'    => $item[0],
                        'DiaChi'   => $item[1],
                        'SDT'      => $item[2],
                        'quantity' => $item[3],
                        'total'    => $item[4],
                        'note'     => $item[5],
                    ];
                }
                echo HandleResponse::success('List data', [
                    'items' => $aData
                ]);
            } else {
                throw new Exception("sorry,the user not access",400);
            }
        } catch (Exception $exception) {
            echo HandleResponse::error($exception->getMessage(), $exception->getCode());
        }
    }

    public function getTokenHeaders(): string
    {
        $token = '';
        $headers = apache_request_headers();
        if (isset($headers['Token'])) {
            $token = $headers['Token'];
        }
        return $token;
    }
}
