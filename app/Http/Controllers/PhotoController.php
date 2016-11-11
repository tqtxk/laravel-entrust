<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class PhotoController extends BaseController
{
    
    public function show($photoId)
    {
        return 'photo-index' . $photoId;
    }


}
