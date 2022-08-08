<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class asmcp_1004_userfolders extends JsonResource
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
            "id_1004"    => $this[0]->id_1004,
            "id_1001"    => $this[0]->id_1001,
            "foldername" => $this[0]->foldername,
            "ket"        => $this[0]->ket,
        ];
    }
}
