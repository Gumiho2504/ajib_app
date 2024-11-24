<x-base-layout>
    <x-header-layout></x-header-layout>
    <main>
        <!-- banner title-->
        <div class="container">
            <div class="title-banner ">
                <div class="title-box">
                    <h1 class="title-text">Discover your</h1>
                    <h1 class="title-text">dream <strong class="title-strong">Jobs &</strong></h1>
                    <h1 class="title-text">hundred <strong class="title-strong">Talents</strong></h1>
                    <h5 class="banner-des">
                        Great platform that allow job seekers and recruiters to meet and match their talent !
                    </h5>
                    <x-search></x-search>
                </div>
                <div class="banner-img">
                    <img src="assets/girls.png" alt="">
                </div>
            </div>

        </div>
        <!-- banner title-->

        <!-- feature Jobs -->
        <div class="feature-container">
            <div class="container">
                <x-section_title>
                    Featured
                    <x-slot:strong>jobs</x-slot>
                </x-section_title>
                <div class="job-list">
                    <!-- job-box -->

                   @foreach($jobs as $job)
                        <x-feature_job_box :$job></x-feature_job_box>
                   @endforeach




                </div>
            </div>
        </div>
        <!-- feature Jobs -->

        <!-- jobs by function -->
        <div class="job-by-function">
            <div class="container">
                <x-section_title>
                    Jobs by
                    <x-slot:strong>Functions</x-slot>
                </x-section_title>
                <div class="job-by-function-list">

                   @for($i=0;$i<8;$i++)
                       <x-job_function_box></x-job_function_box>
                   @endfor

                </div>
            </div>
        </div>
        <!-- jobs by function -->
        <div class="latest-job-container">
            <div class="container">

            <x-section_title>
                Latest
                <x-slot:strong>Jobs open</x-slot>
            </x-section_title>
                <div class="latest-job-list">
                    @foreach($latestJobs as $latestJob)
                        <x-latest_jobs_box :$latestJob></x-latest_jobs_box>
                    @endforeach
                    @for($i=0;$i<8;$i++)

                    @endfor

                </div>
            </div>
        </div>

        <!-- latest job section -->




    </main>
</x-base-layout>


