<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    protected static function booted()
    {
        static::retrieved(function ($model) {
            $model->title = $model->title . ' Test '; // Replace field_name with the actual field name you want to update
        });
    }
}
