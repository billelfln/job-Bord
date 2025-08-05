<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
    <h1>Job Index Page</h1>

    @foreach ($jobs as $job)
        <div class="job">
            <h2>{{ $job['title'] }}</h2>
            <p>My Name is {{ $name }}</p>
            <p><strong>Salary:</strong> {{ $job['salary'] }}</p>
        </div>
    @endforeach
</div>