<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sims extends Model
{
    use HasFactory;
    protected $fillable = [
        'posts_id',
        'simserial',
        'simmsisdn',
        'simnetwork',
        'simpuck',
        'simpin',
        'scannerserial','simtype',

    ];
}
