<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ConvertedIntegerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'integer' => $this->integer,
            'last_time_converted_at' => $this->updated_at->format('Y-m-d H:i:s'),
        ];
    }
}
