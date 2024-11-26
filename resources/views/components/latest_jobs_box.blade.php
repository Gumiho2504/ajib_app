@props(["latestJob"])
<div onclick="redirectToJob({{$latestJob->id}})" class="latest-job-box">
    <div class="company-logo">
        <img src="assets/logo.png" alt="">
    </div>
    <div class="latest-title">
        <h5>{{$latestJob->title}}</h5>
        <div class="company-location">
            {{$latestJob->company->name}}. {{$latestJob->company->address}}
        </div>
        <div class="latest-job-info">
            <div class="label">
                {{$latestJob->type}}
            </div>
            <div class="bar"></div>
            @for($i = 0; $i < $latestJob->job_functions->count(); $i++)
                @if($i == 0)
                    <div class="label-marketing">
                        {{ $latestJob->job_functions[$i]->name }}
                    </div>
                @else
                    <div class="label-design">
                        {{ $latestJob->job_functions[$i]->name }}
                    </div>
                @endif


            @endfor

        </div>
    </div>
</div>
