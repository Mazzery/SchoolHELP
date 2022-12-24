<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestData;

class WelcomeController extends Controller
{
    public function index()
    {
        $request = RequestData::get();
        return view('welcome', compact('request'));
    }
}
