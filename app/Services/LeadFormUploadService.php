<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class LeadFormUploadService
{
    /**
     * @return array{path: string, url: string}
     */
    public function store(UploadedFile $file, string $directory): array
    {
        $directory = trim($directory, '/');
        $extension = strtolower($file->getClientOriginalExtension() ?: $file->extension() ?: 'bin');
        $fileName = Str::uuid().'.'.$extension;

        $path = $file->storeAs($directory, $fileName, 'public');

        return [
            'path' => $path,
            'url' => asset('storage/'.$path),
        ];
    }
}
