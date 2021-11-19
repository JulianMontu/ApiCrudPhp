<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class DoctorResource extends JsonResource
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
            'IdentificadorDoctor'=>$this->id,
            'Nombres'=>Str::of($this->names)->upper(),
            'Apellidos'=>Str::of($this->surnames)->upper(),
            'Edad'=>$this->years,
        ];
    }
    public function with($request)
    {
        return[
          'res'=>true,
        ];
    }
}
