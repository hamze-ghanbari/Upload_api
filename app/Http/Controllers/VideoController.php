<?php

namespace App\Http\Controllers;

use App\Http\Requests\VideoRequest;
use App\Models\Video;

class VideoController extends Controller
{
    public function index(){}

    public function store(VideoRequest $videoRequest){}

    public function show(Video $image){}

    public function destroy(Video $image){}
}
