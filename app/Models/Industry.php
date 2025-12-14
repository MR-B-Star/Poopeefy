<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    protected $fillable = [
        'industry_name',
        'email',
        'password',
        'location',
        'capacity',
        'contact',
        'method'
    ];

    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }
}
