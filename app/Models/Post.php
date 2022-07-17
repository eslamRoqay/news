<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function getImageAttribute($image)
    {
        if (!empty($image)) {
            return asset($image);
        }
        return asset('default-image.png');
    }
    public function getTitleAttribute($value)
    {
        if (app()->getLocale() == 'ar') {
            return $this->title_ar;
        } else {
            return $this->title_en;
        }
    }
    public function getContentAttribute($value)
    {
        if (app()->getLocale() == 'ar') {
            return $this->content_ar;
        } else {
            return $this->content_en;
        }
    }
}
