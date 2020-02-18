<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NewsResource extends JsonResource
{
    /** 
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      
          return $this->resource->map(function ($order) {
            return [
                'news'=>[
                  "name"=> $order->vaccination->name,
                  "dose_time"=> $order->vaccination->dose_time,
                  "quantity"=>  $order->response_quantity,
                  "user"=> $order->user->name,
                  "created_at"=> $order->created_at->format('d-m-yy'),

                ] 
            ];
          });
    }
}
