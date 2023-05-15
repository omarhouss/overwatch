<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable = [
        'number',
        'rank',
        'currentrank',
        'desiredrank',
        'currentnumber',
        'desirednumber',
        'wins',
        'total_price',
        'service',
        'platform',
        'role',
        'server',
    ];
}
