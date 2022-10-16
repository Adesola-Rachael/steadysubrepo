<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Actions\ReserveAccountAction;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Str;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo ='/dashboard'; 
    protected $redirectTo = '/verify';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed','regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9]).*$/'],
            'phone' => ['required','min:10','numeric'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // $data['referred_by'] = ($data['referred_by']) ? $data['referred_by'] : 'Admin';
        // $referral_id = Str::random(9);
        // $user=User::find(9);
        $random = Str::random(5);
        $ref_link = trim(substr($data['name'],0,5).'-'.$random);
        $data['referred_by'] = ($data['referred_by']) ? $data['referred_by'] : 'Admin';

        $user =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'referred_by' => $data['referred_by'],
            'referral_link' => $ref_link,
            'password' => Hash::make($data['password']),
        ]);
          ReserveAccountAction::reserveAccount($user);
          event(new Registered($user));
          
  
          return $user;
    }
}
