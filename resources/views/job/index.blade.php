<x-base-layout>
<x-header-layout></x-header-layout>
    @foreach($jobs as $latestJob)
        <x-latest_jobs_box :$latestJob></x-latest_jobs_box>
    @endforeach
</x-base-layout>
