<?php

namespace App\Http\Controllers\UserController\Components;

use App\Services\Pin\ConfirmPinService;
use Livewire\Component;

class ConfirmPin extends Component
{
    public $first;
    public $second;
    public $third;
    public $fourth;
    public $pin;
    protected $rules = [
        'pin.first' => 'required',
        'pin.second' => 'required',
        'pin.third' => 'required',
        'pin.fourth' => 'required',
    ];
    public function render()
    {
        return view('main.components.confirm-pin');
    }

    public function confirmPin()
    {
        
        $this->validate();
        
        $pin = $this->pin['first'].$this->pin['second'].$this->pin['third'].$this->pin['fourth'];
        
        if(ConfirmPinService::confirmPin($pin)){
            $this->emit('confirmed-pin');
            $this->pin=[];
        }else{
            $this->addError('pin', 'Incorrect Pin');
        }

        
        
        
    }
}
