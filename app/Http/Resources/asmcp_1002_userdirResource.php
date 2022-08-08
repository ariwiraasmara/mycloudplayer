<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class asmcp_1002_userdir extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            "id_1002" => $this[0]->id_1002,
            "id_1001" => $this[0]->id_1001,
            "rootdir" => $this[0]->rootdir,
        ];
    }
}
