<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Services\ImageService\ImageService;
use App\Http\Services\UploadService\Algoritms\Base64File;
use App\Http\Services\UploadService\UploadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UploadController extends Controller
{
    public function __construct(
        public ImageService $imageService
    ){}

    // post
    public function upload(Request $request){
        $this->imageService->setExclusiveDirectory($request->input('directory'));

        $file = new Base64File($this->imageService, $request->input('image'));
        $upload = new UploadService($file);
        $imageAddress = $upload->upload();

        return $imageAddress ?? false;
    }

    // delete
    public function destroy(string $filePath){
        if (file_exists($filePath)) {
            unlink($filePath);
            $dirName = dirname($filePath);
            if (File::allFiles($dirName) === []) {
                File::deleteDirectory($dirName);
            }
        }
    }
}
