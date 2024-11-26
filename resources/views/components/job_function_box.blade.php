@props(['func'])
<div class="function-box" onclick="redirect('func/{{$func->id}}')">
    <div class="function-icon">
        <i class="ri-pencil-ruler-2-line"></i>
    </div>
    <div class="function-title">
        <h5>
           {{$func->name}}
        </h5>
        <div class="job-available">{{$func->jobs->count()}} Jobs Available <i class="ri-arrow-right-line"></i></div>
    </div>

</div>
