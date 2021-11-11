<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ummah extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'connected_with',
        'qualification',
        'occupation',
        'member_count',
        'family_members',
        'attachments',
    ];

    protected $casts = [
        'family_members' => 'array',
        'attachments' => 'array'
    ];
}
