<?php

namespace App\Http\Controllers\UserController\Components;

use App\Services\Pin\IsPinSetService;
use App\Services\Pin\UpdatePinService;
use Livewire\Component;

class SetPin extends Component
{


    public $first;
    public $second;
    public $third;
    public $fourth;

    protected $rules = [
        'first' => 'required',
        'second' => 'required',
        'third' => 'required',
        'fourth' => 'required',
    ];
    

    public function render()
    {

        return view('main.components.set-pin');
    }

    public function checkIfPinExists()
    {
        if (!IsPinSetService::isPinSet()) {
            $this->emit('set-pin');
        }
    }

    public function save()
    {
        
        $this->validate();
        
        $pin = $this->first.$this->second.$this->third.$this->fourth;
        if(UpdatePinService::updatePin($pin)){
            $this->emit('set-pin');
        }else{
            $this->emit('error');
        }
    }
}
