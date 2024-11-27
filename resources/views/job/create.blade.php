<x-base-layout title="Jobs">
    <h1>Create a New Job</h1>

    <!-- Display Validation Errors -->
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Job Creation Form -->
    <form action="{{ route('job.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}" required><br>

        <label for="description">Description:</label>
        <textarea name="description" id="description" required>{{ old('description') }}</textarea><br>

        <label for="location">Location:</label>
        <input type="text" name="location" id="location" value="{{ old('location') }}" required><br>

        <label for="salary">Salary:</label>
        <input type="number" name="salary" id="salary" value="{{ old('salary') }}" required><br>

        <button type="submit">Create Job</button>
    </form>
</x-base-layout>
