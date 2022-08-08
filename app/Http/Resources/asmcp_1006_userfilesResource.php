<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class asmcp_1006_userfiles extends JsonResource
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
            "id_1006"   => $this[0]->id_1006,
            "id_1001"   => $this[0]->id_1001,
            "filename"  => $this[0]->filename,
            "genre"     => $this[0]->genre,
            "artist"    => $this[0]->artist,
            "album"     => $this[0]->album,
            "composer"  => $this[0]->composer,
            "publisher" => $this[0]->publisher,
            "ket"       => $this[0]->ket,
            "favorited" => $this[0]->favorited,
            "folder"    => $this[0]->folder,
            "playlist"  => $this[0]->playlist,
        ];
    }
}
