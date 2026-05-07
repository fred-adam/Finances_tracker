<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saving extends Model
{
    protected $fillable = ['label',
     'amount', 
     'date-hour', 
     'user_id'];
    /**
     * 
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
