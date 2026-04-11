<?php

namespace App\Http\Controllers;

use App\Models\TemporaryFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        if ($request->hasFile('file')) {

            $file = $request->file('file');
            $folder = Str::uuid();
            $filename = $file->getClientOriginalName();

            $file->storeAs('tmp/' . $folder, $filename);

            TemporaryFile::create([
                'folder' => $folder,
                'filename' => $filename
            ]);

            return $folder; 
        }

        return '';
    }

    public function destroy(Request $request)
    {
        $folder = $request->getContent();

        $tempFile = TemporaryFile::where('folder', $folder)->first();

        if ($tempFile) {
            Storage::deleteDirectory('tmp/' . $folder);
            $tempFile->delete();
        }

        return '';
    }
}
