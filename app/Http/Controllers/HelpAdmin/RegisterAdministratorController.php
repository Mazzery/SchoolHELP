<?php

namespace App\Http\Controllers\HelpAdmin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class RegisterAdministratorController extends Controller
{
    //
    public function index()
    {
        //
        return view('helpadmin.register_admin');
    }

    public function addAdmin(Request $request) {
        $database = DB::table('users')->insert([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'name' => $request->fullname,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'staffID' => $request->staffID,
            'position' => $request->position,
            'role' => 'administrator',
        ]);
        echo "<script>alert('Admin added');</script>";
        return redirect()->route('home');
        //return view ('layouts.backend-dashboard.app');
    }
}
