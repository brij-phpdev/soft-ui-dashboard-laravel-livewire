<?php

namespace App\Http\Livewire;
use App\Models\Tatent;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Request;
use Livewire\WithFileUploads;


use Livewire\Component;

class Tenant extends Component
{
    use WithFileUploads;
    public $tenant_name = '';
    public $tenant_photo = '';
    public $tenant_phone = '';
    public $tenant_email = '';
    public $tenant_dob = '';
    public $tenant_passport = '';
    public $tenant_passport_img = '';
    public $tenant_dl_number = '';
    public $tenant_dl_number_img = '';
    public $tenant_ni_number = '';
    public $tenant_ni_number_img = '';
    
    public $showSuccesNotification = false; 
    public $showFailureNotification = false;

    public $showDemoNotification = false;

    
    protected $rules = [
        'tenant_name' => 'max:40|min:3',
        'tenant_email' => 'email:rfc,dns',
        'tenant_phone' => 'max:10',
        'tenant_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024'
    ];
        
    public function save() {
    
        $this->validate();
        
        $existingUser = Tenant::where('email', $this->email)->first();
        if($existingUser ) { 
            
            // tenant already marked
            
            $this->showSuccesNotification = true;
            $this->showFailureNotification = false;
        } else {
            
            $this->tenant_photo->store('photos');
            
            $this->showSuccesNotification = true;
            $this->showFailureNotification = false;
        }
    }
    
    public function upload()
    {
        $this->validate([
            'photos.*' => 'image|max:1024', // 1MB Max
        ]);
 
        foreach ($this->photos as $photo) {
            $photo->store('photos');
        }
    }
    
    public function render()
    {
        $rating_categories = array(
            array('id'=>1,'name'=>'Rent arrears'),
            array('id'=>2,'name'=>'Subletting'),
            array('id'=>3,'name'=>'Behavior'),
            array('id'=>4,'name'=>'Late payment'),
            array('id'=>5,'name'=>'Farming'),
            array('id'=>6,'name'=>'Drugs'),
            
        );
        return view('livewire.tenant')->with('rating_categories',$rating_categories);
    }
}
