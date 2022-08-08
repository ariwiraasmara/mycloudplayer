<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class asmcp_1003_usersecurity extends JsonResource
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
            "id_1003"       => $this[0]->id_1003,
            "id_1001"       => $this[0]->id_1001,
            "device1"       => $this[0]->device1,
            "device_type1"  => $this[0]->device_type1,
            "device_os1"    => $this[0]->device_os1,
            "device2"       => $this[0]->device2,
            "device_type2"  => $this[0]->device_type2,
            "device_os2"    => $this[0]->device_os2,
        ];
    }
}
