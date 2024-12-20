<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\District;
use App\Models\Func;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::all();

        return view('job.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('job.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate input data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'salary' => 'required|numeric|min:0',
        ]);

        // Create the job
        Job::create($validatedData);

        // Redirect with success message
        return redirect()->route('job.index')->with('success', 'Job created successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
      //  dump($job);

      return view('job.show',['job'=>$job]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function search(string $cityName){

        $city = City::where('name',$cityName)->get();
        $districts = $city[0]->districts;
        $companies = $districts->flatMap(function ($district) {
            return $district->companies;
        });

        $jobs= $companies->flatMap(function ($company) {
            return $company->jobs;
        });


        return view('job.index', compact('jobs'));
    }

}
