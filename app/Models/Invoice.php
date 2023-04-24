<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'travel_id',
        'invoice_number',
    ];

    public function travel(): BelongsTo
    {
        return $this->belongsTo(Travel::class);
    }
}
