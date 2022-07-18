<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StaffBranch;
use App\Models\staff;
use App\Models\_branch;

class StaffBranchController extends Controller
{
    public function staffbranch(){
        $staffBranch = StaffBranch::all();
        $staff = staff::all();
        $branch = _branch::all();
        return view('post.staffBranch', compact('staffBranch','staff','branch'));
    }
}
