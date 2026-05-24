<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


enum SessionStatus : string
{
    case SCHEDULED = 'scheduled';
    case COMPLETED = 'completed';
    case CANCELED = 'canceled';
    case MISSED = 'missed';

}
class Session extends Model
{
    use HasFactory, HasUlids;

    protected $fillable = [
        'trainer_id',
        'member_id',
        'session_start',
        'session_end',
        'notes',
        'status',
    ];

    protected $hidden = [
        'deleted_at',
    ];

    protected $casts = [
        'session_start' => 'datetime',
        'session_end' => 'datetime',
        'status' => SessionStatus::class,
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    public function trainer()
    {
        return $this->belongsTo(Trainer::class);
    }

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
