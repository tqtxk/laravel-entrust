<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class PhotoCommentController extends BaseController
{
    public function index()
    {
        return 'index';
    }

    public function show($photoId, $commentId)
    {
        return "photo-{$photoId}-comment-{$commentId}-index";
    }

    public function create($photoId)
    {
        return 'create' . $photoId;
    }
}
