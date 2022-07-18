<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function staff(){
        $staff = staff::all();
        return view('post.staff', compact('staff'));
    }
}
