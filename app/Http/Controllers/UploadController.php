<?php

namespace App\Http\Controllers;

use App\Models\TemporaryFile;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function store (Request $request)
    {
        if ($request->hasFile('video_speaker')){
            $file = $request->file('video_speaker');
            $filename = $file->getClientOriginalName();
            $folder = uniqid() . '-' . now()->timestamp;
            $file->storeAs('speakers_videos/tmp/'. $folder, $filename);
 
            TemporaryFile::create([
                'folder' =>  $folder,
                'filename' => $filename,
            ]);
 
            return $folder;
        }
        return '';
    }
 
}
