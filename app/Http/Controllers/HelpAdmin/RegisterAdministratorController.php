<?php

namespace App\Http\Controllers\HelpAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterAdministratorController extends Controller
{
    //
    public function index()
    {
        //
        return view('helpadmin.register_admin');
    }
}
