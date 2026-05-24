<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


enum memberStatus : String
{
    case Active = 'active';
    case Expired = 'expired';
    case Paused = 'paused';
    case Cancelled = 'cancelled';
}
class Member extends Model
{
    use HasFactory, HasUlids;

    protected $fillable = [
        'user_id',
        'member_code',
        'emergency_contact_name',
        'emergency_contact_phone',
        'medical_notes',
        'fitness_goals',
        'height',
        'weight',
        'membership_status',
        'qr_code',
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
}
