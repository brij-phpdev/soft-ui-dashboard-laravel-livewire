<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use Livewire\Component;

class Property extends Component
{
    use WithFileUploads;

    public $showSuccesNotification = false; 
    public $showFailureNotification = false;

    public $showDemoNotification = false;

    public function render()
    {
        return view('livewire.property');
    }
}
