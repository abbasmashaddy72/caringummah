<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class DeletePatient extends ModalComponent
{
    public $del_id;

    public function render()
    {
        return view('livewire.delete-patient');
    }
}
