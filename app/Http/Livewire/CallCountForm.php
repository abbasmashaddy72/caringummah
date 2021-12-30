<?php

namespace App\Http\Livewire;

use App\Models\CallCount;
use App\Models\Doctor;
use Livewire\Component;

class CallCountForm extends Component
{
    public $name;

    public $phone;

    public $doctor_id;

    public $updateMode = false;

    private function resetInputFields()
    {
        $this->name = '';
        $this->phone = '';
    }

    protected $rules = [
        'name' => 'required|max:20',
        'phone' => 'required|min:10|max:20',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        $this->updateMode = true;
        // $contact_number = Doctor::findOrFail($this->doctor_id)->phone;
        $contact_number = Doctor::findOrFail(1)->phone;
        CallCount::create(
            [
                // 'doctor_id' => $this->doctor_id,
                'name' => $this->name,
                'phone' => $this->phone,
                'doctor_id' => 1,
                'dialed_number' => $contact_number,
            ]
        );

        $this->resetInputFields();

        return redirect()->to('tel://' . $contact_number);
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function render()
    {
        return view('livewire.call-count-form');
    }
}
