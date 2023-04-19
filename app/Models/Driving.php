<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Driving extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id',
      'travel_id',
      'start_driving_at',
      'end_driving_at',
      'stoped_at',
      'continued_at',
  ];

    protected $casts = [
      'start_driving_at' => 'datetime',
      'end_driving_at' => 'datetime',
      'stoped_at' => 'datetime',
      'continued_at' => 'datetime',
  ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function travel(): BelongsTo
    {
        return $this->belongsTo(Travel::class);
    }
}
