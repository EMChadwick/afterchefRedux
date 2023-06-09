<?php

namespace App\Models;


use App\Http\Helper;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Oneduo\NovaFileManager\Casts\Asset;
use Illuminate\Support\Str;


class Post extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'title',
        'description',
        'post_image',
        'user_id'
    ];

    protected $casts = [
        'post_image' => Asset::class,
    ];

    protected $appends = [
        'post_picture_path',
    ];

    public function postedBy(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function getPostPicturePathAttribute()
    {
        
        return Helper::assetToURL($this->post_image);
        
    }

}
