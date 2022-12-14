<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    protected $redirectTo = '/dashboard';

    public function index()
    {
        // return view('/dashboard'); 
        return redirect('/dashboard');
    }
    public function logout() {
        Auth::logout();
        return redirect('/login');
    }

    
}
