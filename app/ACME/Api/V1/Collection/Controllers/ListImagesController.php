<?php

namespace App\ACME\Api\V1\Collection\Controllers;


use App\ACME\Api\V1\Media\Repositories\MediaRepository;
use App\ACME\Api\V1\Media\Resource\MediaResourceCollection;
use App\Http\Controllers\ApiResponseController;
use App\Models\Media;
use App\Traits\MediaTraits;
use Vinkla\Hashids\Facades\Hashids;

class ListImagesController extends ApiResponseController
{
    use MediaTraits;
    
    /**
     * @var MediaRepository
     */
    private $collectionRepository;
    
    /**
     * CreateCollectionController constructor.
     * @param MediaRepository $collectionRepository
     */
    public function __construct(MediaRepository $collectionRepository)
    {
        $this->middleware('jwt.auth', []);
        $this->collectionRepository = $collectionRepository;
    }
    
    /**
     * @apiGroup           Collection
     * @apiName            listImages
     * @api                {post} /api/collection/{id}/images List Images
     * @apiDescription     Retrieve all images of a collection
     * @apiVersion         1.0.0
     *
     * @apiHeader {String} Authorization =Bearer+access-token} Users unique access-token.
     *
     * @apiParam {int} collection_id the encoded id of a collection
     *
     */
    public function run($id)
    {
        if (!$collection = $this->collectionRepository->find(Hashids::decode($id))) {
            return $this->responseWithError(trans('common.not.found'));
        }
        
        $images = Media::where('collection_name', $collection->slug)
                       ->orderBy('created_at', 'desc')
                       ->paginate();
        
        return MediaResourceCollection::collection($images);
    }
}
