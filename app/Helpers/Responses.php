<?php

use GrahamCampbell\ResultType\Success;

/**
 * @param   int    $code 
 * @param   string  $message
 * @param   array   $data
 * @return \Illuminate\Http\JsonResponse
 */
function error_response($code = NotFound, $message, $data = [])
{
    $response = [
        'status' => false,
        'message' => $message
    ];

    isset($data) && !empty($data) ? $response['error'] = $data : null;

    return response()->json([$response], $code);
}

/**
 * @param   int    $code 
 * @param   string  $message
 * @param   array   $data
 * @return \Illuminate\Http\JsonResponse
 */
function success_response($code = Success, $message, $data)
{
    $response = [
        'status' => 'success',
        'message' => $message,
        'data' => $data
    ];

    return response()->json([$response], $code);
}