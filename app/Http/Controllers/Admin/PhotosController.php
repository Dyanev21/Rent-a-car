<?php

use App\Http\Controllers\Controller;
use App\Requests\ArticleRequest;
use App\Requests\PhotosRequest;

class PhotosController extends Controller
{
    public function store(PhotoRequest $request)
    {

        $profilePhotoName = time().'.'.$request->profile_picture->getClientOriginalExtension();
        $additionalPhotoName = time().'.'.$request->additional_photos->getClientOriginalExtension();

        $request->profile_picture->move(public_path('avatars'), $profilePhotoName);
        $request->additional_photos->move(public_path('moreAvatars'), $additionalPhotoName);
    }

}