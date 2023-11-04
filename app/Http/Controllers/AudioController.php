<?php

namespace App\Http\Controllers;

use App\Http\Requests\AudioRequest;
use App\Models\Audio;

class AudioController extends Controller
{
    public function index(){}

    public function store(AudioRequest $audioRequest){}

    public function show(Audio $image){}

    public function destroy(Audio $image){}
}
