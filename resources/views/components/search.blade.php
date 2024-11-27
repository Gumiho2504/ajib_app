@props(['cities','searchCity' => ''])
<div class="search-box">
    <!-- Search Icon -->

    <div class="search-icon">
        <i class="ri-search-line"></i>
    </div>
    <!-- Search Input -->
    <input type="text" placeholder="Job title or keyword">

    <!-- Location Dropdown -->
    <div class="location-wrapper">
        <div class="location">
            <i class="ri-map-pin-2-fill"></i>
            <div class="location-change">
                {{$searchCity}}
            </div>

        </div>
        <ul class="dropdown">
            @foreach($cities as $city)
                <li>{{$city->name}}</li>
            @endforeach

        </ul>
    </div>

    <!-- Search Button -->
    <button onclick="searchJobs()">Search for job</button>
</div>
<script>

    // function updateSearchCity(cityName) {
    //     document.querySelector('.location-change').textContent = cityName;
    // }

    function searchJobs() {
        const cityName = document.querySelector('.location-change').textContent;
        const url = '/job/search/'+cityName
        window.location.href = url;
    }
</script>
