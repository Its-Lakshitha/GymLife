<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory, HasUlids;

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
}
