<?php
/**
 * Created by PhpStorm.
 * User: Mig
 * Date: 6/10/2017
 * Time: 18:36
 */

namespace App\Traits;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\App;
use Intervention\Image\Facades\Image;

trait ImageTrait
{
    public function storeImage($file, $type)
    {
        $ex = $file->getClientOriginalExtension();
        Storage::disk('local')->put($file->getFilename(). '.' . $ex, File::get($file));

        $fileRecord = [
            'name' => $file->getFilename(). '.' . $ex,
            'mime' => $file->getClientMimeType(),
            'original_name' => $file->getClientOriginalName(),
        ];

        $file = \App\File::create($fileRecord);

        self::compress($file);
        self::resizeImage($file, $type);

        return $file;
    }

    public function updateImage($file, $type, $id)
    {
        $image = \App\File::findOrFail($id);
        $old_filename = $image->name;

        $ex = $file->getClientOriginalExtension();
        Storage::disk('local')->put($file->getFilename(). '.' . $ex, File::get($file));

        $fileRecord = [
            'name' => $file->getFilename(). '.' . $ex,
            'mime' => $file->getClientMimeType(),
            'original_name' => $file->getClientOriginalName(),
        ];

        $image->update($fileRecord);

        self::compress($image);
        self::resizeImage($image, $type);

        Storage::delete($old_filename);
        Storage::delete('re_cp_'.$old_filename);
        Storage::delete('thumb_re_cp_'.$old_filename);

        return $image;
    }

    public function compress($file)
    {
        $size = Storage::disk('local')->size($file->name);

        if (App::environment('local')) {
            //windows path
            $img_path = storage_path().'\\app\\'.$file->name;
            $des_path = storage_path().'\\app\\cp_'.$file->name;
        }else{
            //linux path
            $img_path = storage_path().'/app/'.$file->name;
            $des_path = storage_path().'/app/cp_'.$file->name;
        }

        if ($file->mime == 'image/jpeg')
            $image = imagecreatefrompng($img_path);
            //$image = imagecreatefromjpeg($img_path);

        elseif ($file->mime == 'image/gif')
            $image = imagecreatefrompng($img_path);
            //$image = imagecreatefromgif($img_path);

        elseif ($file->mime == 'image/png')
            $image = imagecreatefrompng($img_path);

        else return abort(500);

        if($size > 10000000){//         5 MB
            imagejpeg($image, $des_path, 10);
        }elseif($size > 2000000){//     2 MB
            imagejpeg($image, $des_path, 20);
        }elseif($size > 1000000){//     1 MB
            imagejpeg($image, $des_path, 25);
        }elseif($size > 200000){//      200 KB
            imagejpeg($image, $des_path, 50);
        }else{
            imagejpeg($image, $des_path, 80);
        }

        $file->name = 'cp_'.$file->name;
        $file->save();
    }

    public function resizeImage($file, $type)
    {
        $image = Storage::disk('local')->get($file->name);
        $old_filename = $file->name;

        if($type == 'profile'){
            $width = '900';
            $height = $width;
        }elseif ($type == 'cover'){
            $width = '1920';
            $height = $width/4*3;
        }else{
            // default value
            $width = '500';
            $height = $width;
        }

        $img = Image::make($image)->resize($width, $height);

        if (App::environment('local')) {
            //windows path
            $img->save(storage_path().'\\app\\re_'.$file->name);
        }else{
            //linux path
            $img->save(storage_path().'/app/re_'.$file->name);
        }

        $file->name = 're_'.$file->name;
        $file->save();

        // make image thumbnail
        $img = Image::make($image)->resize(200, null, function ($constraint) {
            $constraint->aspectRatio();
        });

        if (App::environment('local')) {
            //windows path
            $img->save(storage_path().'\\app\\thumb_'.$file->name);
        }else{
            //linux path
            $img->save(storage_path().'/app/thumb_'.$file->name);
        }

        Storage::delete($old_filename);
    }

    public function deleteImage($file)
    {
        Storage::delete($file->name);
        Storage::delete('re_cp_'.$file->name);
        Storage::delete('thumb_re_cp_'.$file->name);
    }
}