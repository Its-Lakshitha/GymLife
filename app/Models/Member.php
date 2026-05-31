<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


enum memberStatus : String
{
    case Active = 'active';
    case Expired = 'expired';
    case Paused = 'paused';
    case Cancelled = 'cancelled';
}
class Member extends Model implements HasMedia
{
    use HasFactory, HasUlids, InteractsWithMedia;

    protected $fillable = [
        'user_id',
        'member_code',
        'emergency_contact_name',
        'emergency_contact_phone',
        'membership_status',
        'joined_at',
    ];

    protected $hidden = [
        'deleted_at',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
        'joined_at' => 'datetime',
        'height' => 'float',
        'weight' => 'float',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function trainers()
    {
        return $this->belongsToMany(Trainer::class, 'member_trainer',);
    }

    public function trainingSessions()
    {
        return $this->hasMany(Session::class);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('medical_reports');
    }
}
