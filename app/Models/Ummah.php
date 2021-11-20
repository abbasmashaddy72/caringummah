<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ummah extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date_of_birth',
        'phone',
        'photo',
        'connected_with',
        'connected_where',
        'qualification',
        'occupation',
        'locality_id',
        'member_count',
        'family_members',
        'attachments',
    ];

    protected $casts = [
        'family_members' => 'array',
        'attachments' => 'array',
    ];

    public function locality()
    {
        return $this->belongsTo(Locality::class);
    }
}
