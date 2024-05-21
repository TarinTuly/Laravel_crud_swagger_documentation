<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ResponseTrait {
   public function responseSuccess($data, $message="successful"):JsonResponse{
       return response()->json([
           'status' => true,
           'message' => $message,
           'data' => $data,
           'error' => null
       ]);
   }

   public function responseError($error,$message="data is invalid"):JsonResponse{
    return response()->json([
        'status' => false,
        'message' => $message,
        'data' => null,
        'error' => $error
    ]);
}
}
