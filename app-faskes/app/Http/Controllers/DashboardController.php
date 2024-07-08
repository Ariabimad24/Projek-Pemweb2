<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function show(){
        return view('dashboard.show'); //folder dashboard ada file index.blade.php
    }
}