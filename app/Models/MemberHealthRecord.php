<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberHealthRecord extends Model
{
    use HasFactory, HasUlids;

    protected $fillable = [
        'member_id',
        'height',
        'weight',
        'fitness_goals',
    ];

    protected $hidden = [
        'deleted_at',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
        'height' => 'float',
        'weight' => 'float',
    ];
}
