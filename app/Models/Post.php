<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 
    'slug', 
    'thumbnail', 
    'body', 
    'user_id', 
    'active', 
    'category_id', 
    'published_at', 
    'meta_title', 
    'meta_description'];

    protected $casts = [
        'published_at' => 'datetime'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function shortBody(): string
    {
        return Str::words(strip_tags($this->body), 50);
    }

    public function getFormattedDate()
    {
        return $this->published_at->format('jS F Y');
    }

    public function getThumbnail()
    {
        if (str_starts_with($this->thumbnail, 'http')) {
            return $this->thumbnail;
        }


        return '/storage/' . $this->thumbnail;
    }

    public function humanReadTime(): Attribute
    {
        return new Attribute(
            get: function ($value, $attributes) {
                $words = Str::wordCount(strip_tags($attributes['body']));
                $minutes = ceil($words / 200);

                return $minutes . ' ' . str('min')->plural($minutes) . ', '
                    . $words . ' ' . str('word')->plural($words);
            }
        );
    }
}