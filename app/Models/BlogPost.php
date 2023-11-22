<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'contents',
        'user_id'
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
