<?php

namespace App\Http\Controllers\Main\Components;

use Livewire\Component;

class Balance extends Component
{
    protected $listeners =[
        'transaction_completed'=>'render'
    ];
    public function render()
    {
        return view('main.components.balance',[
            'user'=>auth()->user()
        ]);
    }
}
