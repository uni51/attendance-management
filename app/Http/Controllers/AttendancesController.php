<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendancesController extends Controller
{
    public function index()
    {
        return view('attendances.index');
    }

    public function create()
    {
        return view('attendances.attend');
    }    
}
