<x-layout>
    <x-slot name="heading">Jobs listing page</x-slot>
    @foreach ($jobs as $job)
        <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
            <h2>{{ $job['title'] }}</h2>
            <p>{{ $job['company'] }}</p>
        </a>
        <p>{{ $job['location'] }}</p>
        <p>{{ $job['description'] }}</p>
        <p>{{ $job['compensation'] }}</p>
        <hr>
    @endforeach
</x-layout>