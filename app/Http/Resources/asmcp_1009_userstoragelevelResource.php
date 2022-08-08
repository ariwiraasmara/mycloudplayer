<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class asmcp_1009_userstoragelevelResource extends JsonResource
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
            "id_1009"           => $data[0]->id_1009,
            "id_1001"           => $data[0]->id_1001,
            "level"             => $data[0]->level,
            "upgraded_lvl2_at"  => $data[0]->upgraded_lvl2_at,
            "upgraded_lvl3_at"  => $data[0]->upgraded_lvl3_at,
            "upgraded_lvl4_at"  => $data[0]->upgraded_lvl4_at,
            "upgraded_lvl5_at"  => $data[0]->upgraded_lvl5_at,
            "upgraded_lvl6_at"  => $data[0]->upgraded_lvl6_at,
            "upgraded_lvl7_at"  => $data[0]->upgraded_lvl7_at,
            "upgraded_lvl8_at"  => $data[0]->upgraded_lvl8_at,
            "upgraded_lvl9_at"  => $data[0]->upgraded_lvl9_at,
        ];
    }
}
