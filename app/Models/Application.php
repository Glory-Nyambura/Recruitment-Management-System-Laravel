<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
    'user_id',
    'full_name',
    'email',
    'phone',
    'county',
    'education',
    'experience',
    'position',
    'salary',
    'cover_letter',
];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
