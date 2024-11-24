@props(['job'])
<x-base-layout>
    <div>
        <h4>{{$job->title}}</h4>
        <h5>{{$job->description}}</h5>
        <div>
             <span>{{$job->min_salary}}</span>
            -
            <span>{{$job->max_salary}}</span>
        </div>
        <h5>{{$job->type}}</h5>
        <h4>requestment</h4>
        <ul>
@foreach($job->requestments as $re)
                <li>{{$re->name}}</li>
@endforeach

        </ul>
        <h4>skill request</h4>
        <ul>
            @foreach($job->skills as $skill)
                <li>{{$skill->name}}</li>
            @endforeach
        </ul>
        <h5>request</h5>
        <span>about -{{$job->company->description}}</span>
        <h5>company - {{$job->company->name}}</h5>
        <h4>address - {{$job->company->address}}</h4>
        <h4>phone - {{$job->company->phone}}}</h4>
    </div>
</x-base-layout>
