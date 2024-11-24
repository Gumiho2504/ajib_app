<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Get the first 8 jobs (no specific order)
        $jobs = Job::limit(8)->get();

        // Get the latest 8 jobs, ordered by 'created_at' in descending order
        $latestJobs = Job::latest()->limit(8)->get();

        // Debugging output (dump the results)
        dump($latestJobs);
        dump($jobs);

        // Return the view with the data
        return view('home', ['jobs' => $jobs, 'latestJobs' => $latestJobs]);
    }

}
