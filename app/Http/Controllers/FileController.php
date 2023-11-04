<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileRequest;
use App\Models\File;

class FileController extends Controller
{
    public function index(){}

    public function store(FileRequest $fileRequest){}

    public function show(File $image){}

    public function destroy(File $image){}
}
