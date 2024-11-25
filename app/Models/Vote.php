<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vote extends Model
{
    protected $fillable = [
        'candidate_id',
        'vote',
    ];

    public function candidate(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
