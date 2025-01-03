<?php

use Carbon\Carbon;
use Illuminate\Http\UploadedFile;


/**
 * Set Image given a img from database.
 *
 * @param string $image
 *
 * @return string url
 */
function useImage($image) {
    return str($image)->isUrl() ? $image : asset("storage/$image");
}


/**
 * Returns current timestamp in format = 'Y-m-d-H-m-s-u'.
 *
 * @return string
 */
function timestamp() {
    return Carbon::now()->format('Y-m-d-H-m-s-u');
}

/**
 * Stores an image given an image request and a directory.
 *
 * @param UploadedFile $image
 * @param string       $prefix skip if you need clientOriginalName
 * @param string       $disk   default = public
 *
 * @return string $new_path
 */
function saveImage($image, string $dir, ?string $prefix = '', string $disk = 'public') {
    if ($image) {
        if ('' === $prefix || null === $prefix) {
            $prefix = str($image->getClientOriginalName())->slug();
        }
        $ext = $image->extension();
        $name = $prefix.'-'.timestamp().'.'.$ext;
        $path = $image->storeAs("uploads/$dir", $name, $disk);

        return $path;
    } else {
        return $image;
    }
}

/**
 * Updates a file given a new file and old path.
 *
 * @param UploadedFile $file
 * @param string       $old_path
 * @param string       $dir
 * @param string       $prefix   skip if you need clientOriginalName
 * @param string       $disk     default = public
 *
 * @return string $new_path
 */
function updateFile($file, $old_path, $dir, $prefix = '', $disk = 'public') {
    if (null === $file) {
        return $old_path;
    }
    $new_path = $old_path;
    $isFile = str($old_path)->contains('/storage');
    if ($isFile) {
        $old_path = explode('storage', $old_path)[1];
    }
    $path = $old_path ? $disk.'/'.$old_path : 'no file exists';
    $fileExists = Storage::exists($path);
    if ($fileExists) {
        if ($file) {
            $new_path = saveImage($file, $dir, $prefix, $disk);
            Storage::delete($path);
        }
    } else {
        $new_path = saveImage($file, $dir, $prefix, $disk);
    }

    return $new_path;
}




/**
 * Deletes a file given its path from database.
 *
 * @param string $old_path
 * @param string $disk     default = public
 */
function deleteFile($old_path, $disk = 'public') {
    $isFile = str($old_path)->contains('/storage');
    if ($isFile) {
        $old_path = explode('storage', $old_path)[1];
    }
    $path = $disk.'/'.$old_path;
    $deleted = false;
    if (Storage::exists($path)) {
        $deleted = Storage::delete($path);
    }

    return $deleted;
}