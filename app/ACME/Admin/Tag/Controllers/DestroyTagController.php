<?php

namespace App\ACME\Admin\Tag\Controllers;

use App\ACME\Admin\Tag\Requests\DeleteSettingRequest;
use App\Http\Controllers\Controller;
use Spatie\Tags\Tag;

class DestroyTagController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function run(DeleteSettingRequest $request)
    {
        $tag = Tag::find($request->id);
        $tag->delete();
        
        return redirect()
            ->back()
            ->with('success', 'Request successfully processed!');
    }
}
