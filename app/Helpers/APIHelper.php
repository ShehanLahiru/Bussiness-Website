<?php

namespace App\Helpers;

use Image;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;


class APIHelper

{

    public static function uploadFileToStorage($uploaded_file, $path)
    {
        if(isset($uploaded_file) && $uploaded_file !== null){
            $disk = Storage::disk('local');
            $result = $disk->putFileAs($path, $uploaded_file, md5(time()). ($uploaded_file->getClientOriginalExtension() !== null ? '.'.$uploaded_file->getClientOriginalExtension() : ''));
            if ($result) {
                $url = $disk->url($result);
                $reSizePath = public_path(''.$url);
                $uploaded_file->save($reSizePath);
                return $url;

            } else {
                $url = null;
            }
        }
        return null;
    }
    public static function removeImage($image_url)

    {
        $image_url = str_replace('http://127.0.0.1:8000/storage/','public/',$image_url);
        if(\Storage::exists($image_url)){
            \Storage::delete($image_url);
        }
        return true;

    }

    public static function generateRandomString() {
        $length = 6;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }




}
