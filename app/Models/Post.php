<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;

class Post extends Model
{
    use HasFactory, HasTrixRichText;
    protected $guarded = [];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    protected static function boot()
    {
        parent::boot();
        static::deleted(function ($post) {
            $post->trixRichText->each->delete();
            $post->trixAttachments->each->purge();
        });
    }
}
