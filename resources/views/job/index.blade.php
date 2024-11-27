<x-base-layout title="Jobs">
<x-header-layout active_name="jobs"></x-header-layout>
    <div style="margin: 80px">
        @foreach($jobs as $latestJob)
            <x-latest_jobs_box :$latestJob></x-latest_jobs_box>
            <div style="height: 20px"></div>
        @endforeach
    </div>

</x-base-layout>
