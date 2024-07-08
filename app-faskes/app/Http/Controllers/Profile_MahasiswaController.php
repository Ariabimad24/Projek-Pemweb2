<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile_Mahasiswa;

class Profile_MahasiswaController extends Controller
{
    //
    public function show(){
        return view('profile_mahasiswa.show');}
}
