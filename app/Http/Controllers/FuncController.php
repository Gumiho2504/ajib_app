<?php

namespace App\Http\Controllers;

use App\Models\Func;
use Illuminate\Http\Request;

class FuncController extends Controller
{
    public function show(Func $func){
        $jobs = $func->jobs;
        return view('job.index', compact('jobs'));
    }
}
