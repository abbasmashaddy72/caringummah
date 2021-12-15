<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Connection;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Response;
use App\Models\Service;
use App\Models\Ummah;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\LineChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;
use Colors\RandomColor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
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

        $connection_locality = Connection::with('locality')->get();

        $pieChartModel3 = $connection_locality->groupBy('locality_id')->reduce(
            function ($pieChartModel3, $connection_locality) {
                $connections = $connection_locality->first()->locality->name;
                $count = $connection_locality->count('id');
                $color = RandomColor::one(['luminosity' => 'dark', 'format' => 'hex']);
                return $pieChartModel3->addSlice($connections, $count, $color);
            },
            (new PieChartModel())
                ->setAnimated($this->firstRun)
                ->setLegendVisibility(true)
                ->legendPositionLeft()
                ->setDataLabelsEnabled($this->showDataLabels)
                ->setOpacity(0.85)
        );

        $ummah_locality = Ummah::with('locality')->get();

        $pieChartModel4 = $ummah_locality->groupBy('locality_id')->reduce(
            function ($pieChartModel4, $ummah_locality) {
                $ummahas = $ummah_locality->first()->locality->name;
                $count = $ummah_locality->count('id');
                $color = RandomColor::one(['luminosity' => 'dark', 'format' => 'hex']);
                return $pieChartModel4->addSlice($ummahas, $count, $color);
            },
            (new PieChartModel())
                ->setAnimated($this->firstRun)
                ->setLegendVisibility(true)
                ->legendPositionLeft()
                ->setDataLabelsEnabled($this->showDataLabels)
                ->setOpacity(0.85)
        );

        $appointment_dated = Appointment::select(DB::raw('count(*) as total'), DB::raw("(DATE_FORMAT(appointment_date, '%M %Y')) as month_year"))->orderBy('appointment_date')->groupBy(DB::raw("DATE_FORMAT(appointment_date, '%M %Y')"))->get();

        $lineChartModel = $appointment_dated->reduce(
            function ($lineChartModel, $appointment_dated) {

                return $lineChartModel->addPoint($appointment_dated->month_year, $appointment_dated->total, ['id' => $appointment_dated->id]);
            },
            (new LineChartModel())
                ->setAnimated($this->firstRun)
                ->setSmoothCurve()
        );

        $doctor_count = Doctor::count();
        $services_count = Service::count();
        $ummah_count = Ummah::count();
        $patient_count = Patient::count();
        $appointment_count = Appointment::count();
        $connection_count = Connection::count();
        $response_count = Response::count();

        return view('dashboard', compact(['doctor_count', 'services_count', 'ummah_count', 'patient_count', 'appointment_count', 'pieChartModel1', 'pieChartModel2', 'pieChartModel3', 'pieChartModel4', 'lineChartModel', 'response_count', 'connection_count']));
    }
}
