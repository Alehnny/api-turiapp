<?php

function responseJson($status = true, $message = '', $code = 200)
{
    return response()->json([
        'status' => $status,
        'message' => $message,
    ], $code);
}