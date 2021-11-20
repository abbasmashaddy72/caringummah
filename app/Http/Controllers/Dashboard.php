<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Ummah;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\LineChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;
use Colors\RandomColor;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public $firstRun = true;
    public $showDataLabels = true;

    public function index()
    {
        $patient_locality = Patient::with('locality')->get();

        $pieChartModel1 = $patient_locality->groupBy('locality_id')->reduce(
            function ($pieChartModel1, $patient_locality) {
                $patients = $patient_locality->first()->locality->name;
                $count = $patient_locality->count('id');
                $color = RandomColor::one(['luminosity' => 'dark', 'format' => 'hex']);
                return $pieChartModel1->addSlice($patients, $count, $color);
            },
            (new PieChartModel())
                ->setAnimated($this->firstRun)
                ->setLegendVisibility(true)
                ->legendPositionLeft()
                ->setDataLabelsEnabled($this->showDataLabels)
                ->setOpacity(0.85)
        );

        $doctor_locality = Doctor::with('locality')->get();

        $pieChartModel2 = $doctor_locality->groupBy('locality_id')->reduce(
            function ($pieChartModel2, $doctor_locality) {
                $patients = $doctor_locality->first()->locality->name;
                $count = $doctor_locality->count('id');
                $color = RandomColor::one(['luminosity' => 'dark', 'format' => 'hex']);
                return $pieChartModel2->addSlice($patients, $count, $color);
            },
            (new PieChartModel())
                ->setAnimated($this->firstRun)
                ->setLegendVisibility(true)
                ->legendPositionLeft()
                ->setDataLabelsEnabled($this->showDataLabels)
                ->setOpacity(0.85)
        );

        $appointment_dated = Appointment::orderBy('appointment_date', 'ASC')->get();

        $lineChartModel = $appointment_dated->reduce(
            function ($lineChartModel, $data) use ($appointment_dated) {
                $index = $appointment_dated->search($data);
                $appointment_count = $appointment_dated->take($index)->groupBy('appointment_date')->count('id');

                return $lineChartModel->addPoint($data->appointment_date, $appointment_count, ['id' => $data->id]);
            },
            (new LineChartModel())
                ->setAnimated($this->firstRun)
                ->setSmoothCurve()
        );

        $doctor_count = Doctor::count();
        $ummah_count = Ummah::count();
        $patient_count = Patient::count();
        $appointment_count = Appointment::count();

        return view('dashboard', compact(['doctor_count', 'ummah_count', 'patient_count', 'appointment_count', 'pieChartModel1', 'pieChartModel2', 'lineChartModel']));
    }
}
