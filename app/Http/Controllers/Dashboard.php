<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Ummah;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public $firstRun = true;

    public function index()
    {
        $data1 = Appointment::with('doctor')->get();

        $columnChartModel1 = $data1->groupBy('doctor_id')->reduce(
            function (ColumnChartModel $columnChartModel, $data1) {
                $doctors = $data1->first()->doctor->name;
                $count = $data1->count('id');
                return $columnChartModel->addColumn($doctors, $count, '#09009B');
            },
            (new ColumnChartModel())
                ->setTitle('Patients Count Doctor Wise')
                ->setAnimated($this->firstRun)
                ->setLegendVisibility(false)
                ->withGrid()
        );

        $data2 = Patient::with('ummah')->get();

        $columnChartModel2 = $data2->groupBy('ummah_id')->reduce(
            function (ColumnChartModel $columnChartModel, $data2) {
                $ummahs = $data2->first()->ummah->name;
                $count = $data2->count('id');
                return $columnChartModel->addColumn($ummahs, $count, '#056608');
            },
            (new ColumnChartModel())
                ->setTitle('Patients Count Ummah Wise')
                ->setAnimated($this->firstRun)
                ->setLegendVisibility(false)
                ->withGrid()
        );

        $doctor_count = Doctor::count();
        $ummah_count = Ummah::count();
        $patient_count = Patient::count();
        $appointment_count = Appointment::count();

        return view('dashboard', compact(['doctor_count', 'ummah_count', 'patient_count', 'appointment_count', 'columnChartModel1', 'columnChartModel2']));
    }
}
