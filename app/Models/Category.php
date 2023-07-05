<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;

<<<<<<< Updated upstream
    protected $fillable = ['title', 'slug'];

    public function posts(): BelongsToMany
=======
    protected $fillable = ['title' /*, 'slug'*/];
    public function post(): HasMany
>>>>>>> Stashed changes
    {
        return $this->belongsToMany(Post::class);
    }

<<<<<<< Updated upstream
    public function publishedPosts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class)
            ->where('active', '=', 1)
            ->whereDate('published_at', '<', Carbon::now());
    }
}
=======
    // public function publishedPosts(): BelongsToMany
    // {
    //     return $this->belongsToMany(Post::class)
    //         ->where('active', '=', 1)
    //         ->whereDate('published_at', '<', Carbon::now());
    // }
}
>>>>>>> Stashed changes
