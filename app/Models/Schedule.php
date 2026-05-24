<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


enum Days: string
{
    case Monday = 'Monday';
    case Tuesday = 'Tuesday';
    case Wednesday = 'Wednesday';
    case Thursday = 'Thursday';
    case Friday = 'Friday';
    case Saturday = 'Saturday';
    case Sunday = 'Sunday';
}
class Schedule extends Model
{
    use HasFactory,HasUlids;

    protected $fillable = [
        'trainer_id',
        'day_of_week',
        'start_time',
        'end_time',
    ];

    protected $hidden = [
        'deleted_at',
    ];

    protected $casts = [
        'start_time' => 'datetime:H:i',
        'end_time' => 'datetime:H:i',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
        'day_of_week' => Days::class,
    ];

    public function trainer()
    {
        return $this->belongsTo(Trainer::class);
    }
    
}
