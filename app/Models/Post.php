<?php

namespace App\Models;

use App\Models\Sims;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable  = [
        'location', 
        'sitename',
        'sitenumber',
        'suppervisorname',
        'suppervisoremail',
    ];
    public function sims(){
        return $this->hasOne(Sims::class);
    }
}
