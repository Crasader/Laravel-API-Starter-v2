<?php

namespace App\ACME\Api\V1\User\Resource;

use App\Traits\MediaTraits;
use Illuminate\Http\Resources\Json\JsonResource;
use Vinkla\Hashids\Facades\Hashids;

class UserResourceLimited extends JsonResource
{
    use MediaTraits;
    
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'       => Hashids::encode($this->id),
            'name'     => $this->name,
            'location' => $this->location,
            'avatar'   => $this->getMedialUrls($this, 'avatar'),
        ];
    }
}