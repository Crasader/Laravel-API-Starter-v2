<?php

namespace App\ACME\Api\V1\Collection\Resource;

use App\Traits\MediaTraits;
use Illuminate\Http\Resources\Json\JsonResource;
use Vinkla\Hashids\Facades\Hashids;

class CollectionResource extends JsonResource
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
            'identifier'  => Hashids::encode($this->id),
            'slug'        => $this->slug,
            'title'       => $this->title,
            'description' => $this->description,
            'score'       => $this->score,
            'created'     => $this->created_at,
            'updated'     => $this->updated_at,
            'covers'      => $this->getMedialUrls($this, $this->slug),
        ];
    }
}
