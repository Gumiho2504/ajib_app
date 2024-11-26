

<x-base-layout>
    <x-header-layout/>

        <div class="job-detail-header-box">

                <div class="job-details-box">
                    <div class="logo-detail">
                        <div class="job-details-logo">
                            <img src="/assets/logo.png" alt="">
                        </div>
                        <div class="job-deatail-title">
                            <h5>{{$job->title}}</h5>
                            <a>{{$job->company->name}}
                                - {{$job->company->district->city->name}},
                                {{$job->company->district->name}} - {{$job->type}}</a>
                        </div>
                    </div>

                    <div class="apply-share">
                        <a href="#">
                            <i class="ri-share-line share-button"></i>
                        </a>
                        <div class="line"></div>
                        <button>Apply</button>
                    </div>


                </div>


        </div>
        <div class="job-details-about-container">
            <div class="container">
                <div class="job-details-about">
                    <div class="left">
                        <h4>ABOUT THE JOB</h4>
                        <div class="job-detail-paragrap">
                            <div class="job-summary">
                                <h5>Job Summary</h5>
                                <p>{{$job->description}}</p>
                            </div>
                            <div class="requirement-box">

                                <h5>Responsibilities</h5>
                                <div class=" requirement-box-list">
                                    @foreach($job->responsibilities as $res)
                                        <span><i class="ri-arrow-right-s-line"></i> {{$res->text}}</span>
                                    @endforeach


                                </div>
                            </div>
                            <div class="requirement-box">

                                <h5>Requirements</h5>
                                <div class=" requirement-box-list">
                                    @foreach($job->requestments as $re)
                                        <span><i class="ri-arrow-right-s-line"></i> {{$res->text}}</span>
                                    @endforeach

                                </div>
                            </div>
                            <div class="requirement-box">
                                <h5>Nice to Haves</h5>

                                <div class=" requirement-box-list">
                                    @foreach($job->nicetohaves as $skill)
                                        <span><i class="ri-arrow-right-s-line"></i> {{$skill->name}}</span>
                                    @endforeach
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="right">
                        <div class="about-the-post">
                            <h5>ABOUT THE POST</h5>
                            <div class="progress-box">
                                <p>{{$job->apply_users->count()}} applied <span>/ {{$job->open_count}} open</span></p>
                                <div class="progress-bar">
                                    <div class="inner-progress-bar"
                                         style="width: {{ $job->apply_users->count() / $job->open_count * 100 }}%">
                                    </div>
                                </div>
                            </div>
                            <div class="the-post-box">
                                <p class="title">Expired Date</p>
                                <p class="value">{{ \Carbon\Carbon::parse($job->expired_at)->format('F,j,Y') }}</p>
                            </div>
                            <div class="the-post-box">
                                <p class="title">Posted Date</p>
                                <p class="value">{{ \Carbon\Carbon::parse($job->published_at)->format('F,j,Y') }}</p>
                            </div>
                            <div class="the-post-box">
                                <p class="title">Job Type</p>
                                <p class="value">{{$job->type}}</p>
                            </div>
                            <div class="the-post-box">
                                <p class="title">Workplace Type</p>
                                <p class="value">Onsite</p>
                            </div>
                            <div class="the-post-box">
                                <p class="title">Location</p>
                                <p class="value">{{$job->company->district->city->name}} , {{$job->company->district->name}}</p>
                            </div>
                            <div class="the-post-box">
                                <p class="title">Salary</p>
                                <p class="value">${{$job->min_salary}}-${{$job->max_salary}}/Year</p>
                            </div>


                        </div>

                        <!-- <div class="about-the-post-line"></div>

                        <div class="recruiter">
                            <img src="recruiter.jpg" alt="Recruiter Image" width="50">
                            <div class="info">
                                <span class="name">John Doe</span>
                                <span class="title">Recruiter at Stripe</span>
                                <a href="#">Send a Message</a>
                            </div>

                        </div> -->
                        <div class="about-the-post-line"></div>
                        <div class="about-the-post-functions">
                            <h5>Functions</h5>
                            <div class="about-the-post-functions-list">
                                @for($i = 0 ;$i<$job->job_functions->count();$i++)
                                    @if($i == 0)
                                        <div class="job-function-box-1"> {{ $job->job_functions[$i]->name }}</div>
                                    @else
                                        <div class="job-function-box-2">{{ $job->job_functions[$i]->name }}</div>
                                    @endif
                                @endfor

                            </div>


                        </div>
                        <!-- <div class="about-the-post-line"></div>
                        <div class="skills">
                            <h3>Skills</h3>
                            <ul>
                                <li>Social Media Marketing</li>
                                <li>Content Creation</li>
                                <li>SEO</li>
                                <li>Analytics</li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>



</x-base-layout>





