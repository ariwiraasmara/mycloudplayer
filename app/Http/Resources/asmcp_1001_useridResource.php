<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class asmcp_1001_userid extends JsonResource
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
            "id_1001"   => $this[0]->id_1001,
            "id"        => $this[0]->id,
            "nama"      => $this[0]->nama,
            "tgl_lahir" => $this[0]->tgl_lahir,
            "tlp"       => $this[0]->tlp,
            "pin"       => $this[0]->pin,
            "photo"     => $this[0]->photo,
        ];
    }
}
