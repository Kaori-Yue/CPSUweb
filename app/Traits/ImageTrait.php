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

        self::resizeImage($file, $type);

        return $file;
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
}