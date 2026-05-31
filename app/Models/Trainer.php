<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Trainer extends Model implements HasMedia
{
    use HasFactory, HasUlids, InteractsWithMedia;

    protected $fillable = [
        'user_id',
        'specialization',
        'experience_years',
        'bio',
        'rating',
        'is_available',
    ];

    protected $hidden = [
        'deleted_at',
    ];

    protected $casts = [
        'is_available' => 'boolean',
        'rating' => 'float',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    public function scopeAvailable($query)
    {
        return $query->where('is_available', true);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sessions()
    {
        return $this->hasMany(Session::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('medical_reports');
    }
}
