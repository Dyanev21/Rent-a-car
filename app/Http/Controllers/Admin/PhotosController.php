<?php

use App\Http\Controllers\Controller;
use App\Models\Photo;
use App\Requests\ArticleRequest;
use App\Requests\PhotosRequest;

class PhotosController extends Controller
{
//    public function store(PhotoRequest $request, Photo $images)
//    {

//        $profilePhotoName = time().'.'.$request->profile_picture->getClientOriginalExtension();
//        $images->update($request->all());
//        request()->validate([
//            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//        ]);
//
//        $input = time().'.'.request()->image->getClientOriginalExtension();
//        request()->image->move(public_path('coverImages'), $input);


//        $additionalPhotoName = time().'.'.$request->additional_photos->getClientOriginalExtension();
//        $images->update($request->all());
//        request()->validate([
//            'additional_photos' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//        ]);
//
//        $input = time().'.'.request()->image->getClientOriginalExtension();
//        request()->image->move(public_path('coverImages'), $input);


//        $request->profile_picture->move(public_path('images'), $profilePhotoName);
//        $request->additional_photos->move(public_path('images'), $additionalPhotoName);
//        return back()
//            ->with('image',$input);
//    }

}