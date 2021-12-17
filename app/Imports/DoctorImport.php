<?php

namespace App\Imports;

use App\Models\Department;
use App\Models\Doctor;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DoctorImport implements ToModel, WithHeadingRow
{
    private $departments;

    public function __construct()
    {
        $this->departments = Department::get();
    }
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        if (is_numeric($row['monthly_slots'])) {
            $monthly_slots = $row['monthly_slots'];
        } else {
            $monthly_slots = 10;
        }

        $clinic_hospital_phone = str_replace(' ', '', $row['clinic_hospital_phone']);
        if (is_numeric($clinic_hospital_phone)) {
            $clinic_hospital_phone = str_replace(' ', '', $row['clinic_hospital_phone']);
        } else {
            $clinic_hospital_phone = 1000000000;
        }

        if (is_null($row['clinic_hospital_name'])) {
            $clinic_hospital_name = "Not Given";
        } else {
            $clinic_hospital_name = $row['clinic_hospital_name'];
        }

        $department = $this->departments->where('title', 'like', '%' . $row['department'] . '%')->first();

        return new Doctor([
            'name' => $row['name'],
            'department_id' => $department->id ?? 15,
            'qualification' => $row['qualification'],
            'phone' => str_replace(' ', '', $row['phone']),
            'locality_id' => 100,
            'clinic_hospital_name' => $clinic_hospital_name,
            'clinic_hospital_address' => $clinic_hospital_name,
            'clinic_hospital_phone' => $clinic_hospital_phone,
            'monthly_slots' => $monthly_slots,
            'extra_services' => $row['extra_services'],
            'suggestions' => $row['suggestions'],
        ]);
    }
}
