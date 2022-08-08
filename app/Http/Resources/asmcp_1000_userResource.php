<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class asmcp_1000_userResource extends JsonResource
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
            "id"        => $this[0]->id,
            "username"  => $this[0]->username,
            "email"     => $this[0]->email,
            "password"  => $this[0]->password,
            "tlp"       => $this[0]->tlp,
            "pin"       => $this[0]->pin,
        ];
    }
}
