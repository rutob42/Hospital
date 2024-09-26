<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function doctorview()
    {

        return view('admin.add_doctor');
    }
}
