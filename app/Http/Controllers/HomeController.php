<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
  
    public function index()
    {
        return view('home');
    } 
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function helpAdminHome()
    {
        return view('helpadmin.home');
    }
  
    public function schoolAdminHome()
    {
        return view('administrator.home');
    }
    public function volunteerHome()
    {
        return view('volunteer.home');
    }

    
}
