@props(['active_name' => ''])
<header>
    <div class="nav container">

        <div class="nav-menu">
            <a href="{{route('home')}}" class="nav-logo">
                <img src="/assets/logo.png" alt="" class="logo">
            </a>
        </div>
        <div class="nav-button">
            <ul class="nav-list">
                <li>
                    <a href="{{route('job.index')}}" @if($active_name == 'jobs')
                            class="nav-link-active"
                    @else
                        class = "nav-link"
                    @endif
                    >Jobs</a>
                </li>
                <li>
                    <a href="{{route('company.index')}}"
                       @if($active_name == 'company')
                           class="nav-link-active"
                       @else
                           class = "nav-link"
                        @endif
                    >Companies</a>
                </li>
            </ul>
            <ul class="nav-list-button">
                <li>
                    <a href="/login" class="nav-link-button">Login</a>
                </li>
                <div class="bar"></div>
                <li>
                    <a href="/signup" class="nav-link-button">Sign up</a>
                </li>
            </ul>
        </div>
        <div class="menu-logo" id="menu-button">
            <i class="ri-menu-3-line"></i>
        </div>




    </div>
    <div class="menu-mobile container" id="menu-mobile">
        <div class="nav-box"><a href="{{route('job.index')}}" class="a">Jobs</a></div>
        <div class="nav-box"><a href="{{route('company.index')}}" class="a">Companies</a></div>
        <div class="nav-box"><a href="/login" class="a">Login</a></div>
        <div class="nav-box"><a href="/signup" class="a">Sign up</a></div>
    </div>
</header>
