<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable as AuditingAuditable;
use OwenIt\Auditing\Contracts\Auditable;

class Connection extends Model implements Auditable
{
    use AuditingAuditable;
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'locality_id',
    ];

    public function locality()
    {
        return $this->belongsTo(Locality::class);
    }
}
