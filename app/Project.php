<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'description','image_url'
    ];
    public function getImageUrlAttribute($value)
    {
        if($value){
            return config('app.url').$value;
        }
    }
}
