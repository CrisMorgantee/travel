<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Travel extends Model
{
    use HasFactory;

    protected $fillable = [
        'registered_by',
        'itinerary'
    ];

    public function drivings(): HasMany
    {
        return $this->hasMany(Driving::class);
    }

    public function invoices(): HasMany
    {
        return $this->hasMany(Invoice::class);
    }

    public function team(): HasMany
    {
        return $this->hasMany(Team::class);
    }

    public function registeredBy()
    {
        // dd($this->registered_by);
        $user = User::query()->where('id', $this->registered_by)->get('name')->first();
        // dd($user);

        return $user->name;
    }
}
