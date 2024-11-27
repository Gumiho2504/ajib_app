<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Func;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $jobs = Job::limit(8)->get();

        $latestJobs = Job::latest()->limit(8)->get();

//        $user = User::create([
//            'first_name' => "metrety",
//            'last_name' => "metrety",
//            'email' => "metrety@",
//            'phone' => "1234567890",
//            'password' => "qwe123",
//        ]);

        $cities = City::all();

    $funcs = Func::all();


        // Return the view with the data
        return view('home', [
            'jobs' => $jobs,
            'latestJobs' => $latestJobs,
            'funcs' => $funcs,
            'cities' => $cities,
        ]);
    }

}
