<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'slug',
        'address',
        'phone',
        'website',
        'logo',
        'cover_photo',
        'slugan',
        'description',

    ];

    public function jobs()
    {
       return  $this->hasMany(Job::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
