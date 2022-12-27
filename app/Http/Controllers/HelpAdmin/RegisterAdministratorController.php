<?php

namespace App\Http\Controllers\HelpAdmin;

use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\User;

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
        $school = School::find($request->school_id);
        if(!$school) return redirect()->back()->with('error','School not found');
        $user = User::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'name' => $request->fullname,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'staffID' => $request->staffID,
            'position' => $request->position,
            'role' => 'school_admin',
            'school_id' => $request->school_id,
        ]);

        return redirect()->route('help_admin_home')->with('success','Administrator Has Been Successfully Registered');
    }
}
