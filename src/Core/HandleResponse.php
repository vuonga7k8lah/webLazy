<?php

namespace webLazy\Core;

class HandleResponse
{
    public static function error($msg, $code): array
    {
        return[
            'status' => 'error',
            'msg'    => $msg,
            'code'   => $code
        ];
    }

    public static function success($msg, $aData = []): array
    {
        return [
            'status' => 'success',
            'msg'    => $msg,
            'data'   => $aData,
            'code'   => 200
        ];
    }
    private static function _build_http_header_string($statusCode):string
    {
        $status = array(
            200 => 'OK',
            404 => 'Not Found',
            400 => 'Bad Request',
            401 => 'Unauthorized',
            405 => 'Method Not Allowed',
            500 => 'Internal Server Error'
        );
        return "HTTP/1.1 " . $statusCode . " " . $status[$statusCode];
    }
}
