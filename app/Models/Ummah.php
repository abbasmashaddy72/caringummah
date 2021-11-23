<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable as AuditingAuditable;
use OwenIt\Auditing\Contracts\Auditable;

class Ummah extends Model implements Auditable
{
    use AuditingAuditable;
    use HasFactory;

    protected $fillable = [
        'name',
        'date_of_birth',
        'phone',
        'photo',
        'connection_id',
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

    public function connection()
    {
        return $this->belongsTo(Connection::class);
    }
}
