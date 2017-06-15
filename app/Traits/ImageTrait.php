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

        //self::resizeImage($file, $type);
        self::compress($file);

        return $file;
    }

    public function compress($file)
    {
        $size = Storage::disk('local')->size($file->name);
        if($size > 400000){
            if (App::environment('local')) {
                //windows path
                $img_path = storage_path().'\\app\\'.$file->name;
                $des_path = storage_path().'\\app\\compress_'.$file->name;
            }else{
                //linux path
                $img_path = storage_path().'/app/'.$file->name;
                $des_path = storage_path().'/app/compress_'.$file->name;
            }

            if ($file->mime == 'image/jpeg')
                $image = imagecreatefromjpeg($img_path);

            elseif ($file->mime == 'image/gif')
                $image = imagecreatefromgif($img_path);

            elseif ($file->mime == 'image/png')
                $image = imagecreatefrompng($img_path);

            else return abort(500);

            imagejpeg($image, $des_path, 25);

            $file->name = 'compress_'.$file->name;
            $file->save();
        }
    }

    public function resizeImage($file, $type)
    {
        $size = Storage::disk('local')->size($file->name);
        if($size > 999999){
            $image = Storage::disk('local')->get($file->name);

            if($type == 'profile'){
                $width = '400';
            }elseif ($type == 'cover'){
                $width = '800';
            }else{
                // default value
                $width = '500';
            }

            $img = Image::make($image)->resize($width, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            if (App::environment('local')) {
                //windows path
                $img->save(storage_path().'\\app\\resize_'.$file->name);
            }else{
                //linux path
                $img->save(storage_path().'/app/resize_'.$file->name);
            }

            $file->name = 'resize_'.$file->name;
            $file->save();
        }
    }

    public function deleteImage($file)
    {
        Storage::delete($file->name);
    }
}