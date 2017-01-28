<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinuxController extends Controller
{
    public function index()
    {
    	return view('linux.index');
    }
}
