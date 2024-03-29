<?php

namespace App\Http\Livewire;

use App\Models\Doctor;
use App\Models\Locality;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class LiveSearch extends Component
{
    use WithPagination;

    public $searchTerm = '';
    public $searchLocality;
    // public $doctors;

    public $data;

    public function updatingSearchTerm()
    {
        $this->resetPage();
    }

    public function updatingSearchLocality()
    {
        $this->resetPage();
    }

    public function render()
    {

        $doc_locations = Doctor::with('locality')->groupBy('locality_id')->get('locality_id');
        $static_location = Locality::whereIn('city_id', [26, 71])->get();
        $doctor_counts = Doctor::count();

        if (!empty($this->searchTerm) && empty($this->searchLocality)) {

            $doctors =
                Doctor::with('department', 'services', 'locality')
                ->when($this->searchTerm, function ($query) {
                    $query->orWhere('name', 'LIKE', '%' . $this->searchTerm . '%');
                    $query->orWhere('extra_services', 'LIKE', '%' . $this->searchTerm . '%');
                    $query->orWhereRelation('department', 'title', 'LIKE', '%' . $this->searchTerm . '%');
                    $query->orWhereRelation('services', 'titles', 'LIKE', '%' . $this->searchTerm . '%');
                })
                ->orderBy('locality_id', 'DESC')
                ->get();
        } elseif (empty($this->searchTerm) && !empty($this->searchLocality)) {

            $doctors =
                Doctor::with('department', 'services', 'locality')
                ->when($this->searchLocality, function ($query) {
                    $query->where('locality_id', $this->searchLocality);
                })
                ->orderBy('name', 'ASC')
                ->get();
        } elseif (!empty($this->searchTerm) && in_array($this->searchLocality, array_diff($static_location->pluck('id')->toArray(), $doc_locations->pluck('locality_id')->toArray()))) {

            $doctors = Doctor::with('department', 'services', 'locality')
                ->orWhere('locality_id', $this->searchLocality)
                ->orWhere('qualification', 'LIKE', '%' . $this->searchTerm . '%')
                ->orWhere('name', 'LIKE', '%' . $this->searchTerm . '%')
                ->orWhere('extra_services', 'LIKE', '%' . $this->searchTerm . '%')
                ->orWhereRelation('department', 'title', 'LIKE', '%' . $this->searchTerm . '%')
                ->orWhereRelation('services', 'titles', 'LIKE', '%' . $this->searchTerm . '%')
                ->orderBy('name', 'ASC')
                ->orderBy('locality_id', 'DESC')
                ->get();
        } elseif (!empty($this->searchTerm) && in_array($this->searchLocality, $doc_locations->pluck('locality_id')->toArray())) {
            $data0 = Doctor::with('department', 'services', 'locality')
                // ->where('locality_id', $this->searchLocality)
                ->where('qualification', 'LIKE', '%' . $this->searchTerm . '%')
                // ->orderBy('locality_id', 'DESC')
                ->orderBy('name', 'ASC')
                ->get();

            $data1 = Doctor::with('department', 'services', 'locality')
                // ->where('locality_id', $this->searchLocality)
                ->where('name', 'LIKE', '%' . $this->searchTerm . '%')
                // ->orderBy('locality_id', 'DESC')
                ->orderBy('name', 'ASC')
                ->get();

            $data2 = Doctor::with('department', 'services', 'locality')
                // ->where('locality_id', $this->searchLocality)
                ->where('extra_services', 'LIKE', '%' . $this->searchTerm . '%')
                // ->orderBy('locality_id', 'DESC')
                ->orderBy('name', 'ASC')
                ->get();

            $data3 = Doctor::with('department', 'services', 'locality')
                // ->where('locality_id', $this->searchLocality)
                ->whereRelation('department', 'title', 'LIKE', '%' . $this->searchTerm . '%')
                // ->orderBy('locality_id', 'DESC')
                ->orderBy('name', 'ASC')
                ->get();

            $data4 = Doctor::with('department', 'services', 'locality')
                // ->where('locality_id', $this->searchLocality)
                ->whereRelation('services', 'titles', 'LIKE', '%' . $this->searchTerm . '%')
                // ->orderBy('locality_id', 'DESC')
                ->orderBy('name', 'ASC')
                ->get();

            $doctors = $data0->merge($data1)->merge($data2)->merge($data3)->merge($data4);
        } else {

            $doctors = Doctor::with('department', 'services', 'locality')->orderBy('name', 'ASC')->paginate(9);
        }

        return view('livewire.live-search', compact('doc_locations', 'static_location', 'doctors', 'doctor_counts'));
    }
}
