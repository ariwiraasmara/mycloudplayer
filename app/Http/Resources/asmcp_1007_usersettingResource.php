<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class asmcp_1007_usersetting extends JsonResource
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
            "id_1007"           => $this[0]->id_1007,
            "id_1001"           => $this[0]->id_1001,
            "theme"             => $this[0]->theme,
            "text"              => $this[0]->text,
            "bar"               => $this[0]->bar,
            "wall_img"          => $this[0]->wall_img,
            "wall_heigth"       => $this[0]->wall_heigth,
            "wall_width"        => $this[0]->wall_width,
            "wall_size"         => $this[0]->wall_size,
            "wall_position"     => $this[0]->wall_position,
            "wall_repeat"       => $this[0]->wall_repeat,
            "wall_attachment"   => $this[0]->wall_attachment,
        ];
    }
}
