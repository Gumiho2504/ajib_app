<x-base-layout title="Company">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">All Companies</h1>
            <div class="flex items-center space-x-2">
                <span>Sort by:</span>
                <select class="border-gray-300 rounded p-2 text-sm">
                    <option>Most relevant</option>
                    <option>Newest</option>
                    <option>Oldest</option>
                </select>
                <button class="p-2 rounded bg-gray-200 hover:bg-gray-300">
                    <span class="material-icons">grid_view</span>
                </button>
                <button class="p-2 rounded bg-gray-200 hover:bg-gray-300">
                    <span class="material-icons">view_list</span>
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach($companies as $company)
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 rounded bg-teal-500 flex items-center justify-center">
                            <span class="text-white text-xl font-bold">{{$company->name[0]}}</span>
                        </div>
                        <div>
                            <h2 class="text-lg font-bold">{{$company->name}}</h2>
                            <p class="text-gray-600 text-sm">{{$company->jobs->count()}} Jobs</p>
                        </div>
                    </div>
                    <p class="mt-4 text-gray-600">{{$company->description}}</p>
                    <div class="mt-4">
                        <span class="px-3 py-1 text-sm bg-orange-100 text-orange-600 rounded-full">{{$company->type}}</span>
                    </div>
                </div>
            @endforeach








        </div>
    </div>
</x-base-layout>
