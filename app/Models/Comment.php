<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'content',
        'post_id',
        'user_id'
    ];



    public function madeBy(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function postedOn(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
