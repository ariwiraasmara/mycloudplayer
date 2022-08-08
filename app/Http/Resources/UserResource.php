<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request){
        //return parent::toArray($request);
        return [
            'id'                => $this[0]->id,
            'username'          => $this[0]->username,
            'email'             => $this[0]->email,
            'email_verified_at' => $this[0]->email_verified_at,
            'password'          => $this[0]->password,
            'remember_token'    => $this[0]->remember_token,
            'created_at'        => $this[0]->created_at,
            'update_at'         => $this[0]->update_at,
            'deleted_at'        => $this[0]->deleted_at
        ];
    }
}
