<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
         'Data' =>[  'title'=> $this->title,
            'body' => $this->body,
        ],
         'status' => '200'
        ];



    }

    public function with($request)
    {
        return [
            "version" => "1.101.1",
            'message' => "ok",
            "response" => 200
        ];
    }

    // public function getStatus($data=null, $status=null)
    // {
    //     $Data = [
    //         'data' => $data,
    //         'status' => $status
    //     ];
    //     return response($Data);
    // }
}