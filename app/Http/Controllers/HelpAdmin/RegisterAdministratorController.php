<?php

namespace App\Http\Controllers\HelpAdmin;

use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class RegisterAdministratorController extends Controller
{
    //
    public function index()
    {
        //
        $school = School::get();
        return view('helpadmin.register_admin', compact('school'));
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
            'role' => 'school_admin',
            'school' => $request->school,
        ]);
        return redirect()->route('help_admin_home')->with('success','Administrator Has Been Successfully Registered');
    }
}
