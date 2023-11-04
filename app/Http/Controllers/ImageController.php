<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use App\Http\Services\ImageService\ImageService;
use App\Http\Services\UploadService\Algoritms\Base64File;
use App\Http\Services\UploadService\UploadService;
use App\Models\Image;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    public function __construct(
        public ImageService $imageService
    )
    {
    }

    public function all()
    {
    }

    public function upload(ImageRequest $imageRequest): bool|string
    {
        $this->imageService->setExclusiveDirectory($imageRequest->input('directory'));

        $file = new Base64File($this->imageService, $imageRequest->input('image'));
        $upload = new UploadService($file);
        $imageAddress = $upload->upload();

        return response()->json($imageAddress) ?? false;
    }

    public function show(Image $image)
    {
    }

    public function destroy(Image $image)
    {
        if (file_exists($image->name)) {
            unlink($image->name);
            $dirName = dirname($image->name);
            if (File::allFiles($dirName) === []) {
                File::deleteDirectory($dirName);
            }
        }
    }
}
