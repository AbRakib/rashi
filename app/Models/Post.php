<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model {
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'details',
        'image',
        'status',
    ];

    /**
     * Get the post that owns the comment.
     */
    public function user(): BelongsTo {
        return $this->belongsTo( User::class );
    }
}
