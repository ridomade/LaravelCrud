<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function showFullScreenVideo()
    {
        return view('fullscreen-video');
    }
}
