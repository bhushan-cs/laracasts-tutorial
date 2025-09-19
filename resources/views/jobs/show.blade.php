<x-layout>
    <x-slot name="heading">Job page</x-slot>
    
    <h1>{{ $job['title'] }}</h1>
    <p>{{ $job->employer->name }}</p>
    <p>{{ $job['location'] }}</p>
    <p>{{ $job['description'] }}</p>
    <p>{{ $job['compensation'] }}</p>
</x-layout>