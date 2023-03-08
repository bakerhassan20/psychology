<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = [
        'lang' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getCatAttribute($value)
    {
        return $this->attributes['lang'] = json_decode($value);
    }
}
