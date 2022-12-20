<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    function index()
    {
        $videos = Video::orderBy('release', 'desc')->where('is_public', 1)->paginate(5);

        return view('videos.index',['videos' => $videos]);
    }

    function showClip($video)
    {
        $video = Video::find($video);
        if(empty($video) || !$video->is_public)
        {
            return response()->view('videos.missing')->setStatusCode(403);
        }

        return view('videos.show', ['video' => $video]);
    }

    function randomClip(Request $request)
    {
        $video = Video::inRandomOrder()->where('is_public',1)->first();

        return view('videos.random', ['video' => $video]);
    }
}
