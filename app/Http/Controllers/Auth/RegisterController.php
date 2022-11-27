<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'phone_number' => ['required', 'string', 'max:255'],
            'occupation' => ['required', 'string', 'max:255'],
            'date_of_birth' => ['required', 'date'],
            'email_verified_at' => now(),
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['fullname'],
    //         'email' => $data['email'],
    //         'username' => $data['username'],
    //         'password' => Hash::make($data['password']),
    //         'phone_number' => $data['phone_number'],
    //         'occupation' => $data['occupation'],
    //         'date_of_birth' => $data['date_of_birth'],
    //         'email_verified_at' => now(),
    //     ]);
    // }
    public function addVolunteer(Request $request) {
        $database = DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'occupation' => $request->occupation,
            'date_of_birth' => $request->date_of_birth,
            'email_verified_at' => now(),
        ]);
        echo "<script>alert('Volunteer added');</script>";
        //return view ('layouts.backend-dashboard.app');
        return redirect()->route('home');
    }
}
