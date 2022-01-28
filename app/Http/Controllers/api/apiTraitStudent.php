<?php
namespace App\Http\Controllers\api;

trait apiTraitStudent{
public function apiResponse($data=null, $status = null, $message = null)
{
        $array =[
            'data'=>$data,
            'status' => $status,
            'message' => $message
        ];

        return response($array);
}






}




?>
