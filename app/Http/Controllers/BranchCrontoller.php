<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BranchCrontoller extends Controller
{
    public function branch(){
        $branch = _branch::all();
        return view('post.branch', compact('branch'));
    }
}
