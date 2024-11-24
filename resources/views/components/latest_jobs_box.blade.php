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
            <div class="label-marketing">
                Marketing
            </div>
            <div class="label-design">
                Disign
            </div>
        </div>
    </div>
</div>
