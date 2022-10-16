<?php

namespace App\Http\Controllers\frontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function About(){
        return view('frontend/about');
    }
}