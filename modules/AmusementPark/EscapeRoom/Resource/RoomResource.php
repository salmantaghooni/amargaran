<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RoomResource extends JsonResource
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
        'name'=>$request->name,
        'category_id'=>$request->category_id,
        'amount'=>$request->amount,
        'participant_max'=>$request->participant_max,
        'created_at'=>$request->created_at,
        'updated_at'=>$request->updated_at,
       ];
    }
}
