<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    function index()
    {
        $videos = Video::orderBy('release', 'desc')->where('is_public', 1)->paginate(5);

        //return view('home',compact('videos'));
        return view('home',['videos' => $videos]);
    }
}
