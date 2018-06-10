<?php

namespace Modules\Media\Http\Controllers\Frontend;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Modules\Media\Repositories\FileRepository;
use Symfony\Component\HttpFoundation\Request;

class MediaController extends Controller
{
    /**
     * @var FileRepository
     */
    private $file;

    public function __construct(FileRepository $file)
    {
        $this->file = $file;
    }

    public function show($path)
    {
        $file = $this->file->findForVirtualPath($path);
        $type = $file->mimetype;

        $path = storage_path('app' . $file->path->getRelativeUrl());

        //return Image::make($path)->response();

        return response()->file($path, [
            'Content-Type' => $type,
        ]);
    }

    public function files(Request $request)
    {
        $files = [];
        foreach (Storage::disk('instrukcje')->files($request->input('location')) as $file) {
            $filo = storage_path("../public/assets/media/instrukcje/".$file);
            $files[] = [
                'path' => $file,
                'name' => array_reverse(explode('/', $file))[0],
                'extension' => pathinfo($filo)['extension']
            ];
        }

        $directories = [];
        $location = explode('/', $request->input('location'));
        if ($location[0] !== '') {
            array_pop($location);
            $directories[] = [
                'path' => implode('/', $location),
                'name' => '..'
            ];
        }

        foreach (Storage::disk('instrukcje')->directories($request->input('location')) as $directory) {
            $directories[] = [
                'path' => $directory,
                'name' => array_reverse(explode('/', $directory))[0]
            ];
        }

        return response()->json([
            'directories' => $directories,
            'files' => $files
        ]);
    }

    public function media()
    {
        return view('media::front.index');
    }

    public function download(Request $request)
    {
        return response()->download(storage_path("../public/assets/media/instrukcje/".($request->input('file')['path'])));
    }


}
