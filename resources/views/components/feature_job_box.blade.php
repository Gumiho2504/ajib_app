@props(["job"])
<div onclick="redirectToJob({{$job->id}})" class="job-box">


        <div class="job-box-header" >
            <div class="c-logo">
                <img src="assets/logo.png" alt="">
            </div>
            <div class="small-button">
                {{$job->type}}
            </div>
        </div>

        <div class="job-box-title">
            <h5>{{$job->title}}</h5>
            <span>{{$job->company->name}} - {{$job->company->district->city->name}} {{$job->company->district->name}}</span>
        </div>

        <div class="job-box-des"> {{ \Illuminate\Support\Str::limit($job->description, 50) }} ...</div>

        <div class="job-type-list">

            <h4 class="job-type">
                {{$job->job_functions[0]->name}}
            </h4>
        </div>

</div>


