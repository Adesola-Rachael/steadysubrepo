<?php

namespace App\Http\Controllers\frontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data;

class indexController extends Controller
{
    public function HomePage(){
        $data['airtel'] = Data::where('network', 'airtel')->orderBy('set_price')->get();
        $data['mtn'] = Data::where('network', 'mtn')->orderBy('set_price')->get();
        $data['glo'] = Data::where('network', 'glo')->orderBy('set_price')->get();
        $data['nmobile'] = Data::where('network', '9mobile')->orderBy('set_price')->get();
        
        return view('frontend/index',$data);
    }
}
