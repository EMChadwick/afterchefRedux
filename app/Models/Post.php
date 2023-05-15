<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Oneduo\NovaFileManager\Casts\AssetCollection;

class Post extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'title',
        'description',
        'postImage',
        'user_id'
    ];

    protected $casts = [
        'postImage' => AssetCollection::class,
    ];

    public function postedBy(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
