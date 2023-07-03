<?php

namespace App\Http\Livewire\LaravelExamples;

use Livewire\Component;

class UserManagement extends Component
{

    protected $rules = [
        'user.name' => 'max:40|min:3',
        'user.email' => 'email:rfc,dns',
        'user.phone' => 'max:10',
        'user.about' => 'max:200',
        'user.location' => 'min:3'
    ];
        
    public function save() {
    
        $this->validate();
        $this->user->save();
        $this->showSuccesNotification = true;
    }
    
    public function render()
    {
        return view('livewire.laravel-examples.user-management');
    }
}
