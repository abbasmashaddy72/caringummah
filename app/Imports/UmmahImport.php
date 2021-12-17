<?php

namespace App\Imports;

use App\Models\Ummah;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UmmahImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Ummah([
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
        ]);
    }
}
