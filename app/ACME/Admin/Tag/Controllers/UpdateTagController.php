<?php

namespace App\ACME\Admin\Tag\Controllers;

use App\ACME\Admin\Tag\Requests\StoreTagRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Tags\Tag;

class UpdateTagController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function run(StoreTagRequest $request)
    {
        $tag = Tag::find($request->id);
        $tag->setTranslation('name', 'en', $request->name);
        $tag->setTranslation('name', 'fr', $request->fr_name);
        $tag->save();
    
        return redirect()
            ->back()
            ->with('success', 'Request successfully processed!');
    }
}
