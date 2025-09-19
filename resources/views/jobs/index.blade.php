<x-layout>
    <x-slot name="heading">Jobs listing page</x-slot>
    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/job/{{ $job['id'] }}" class="block px-4 py-6 border boder-gray-200 rounded-lg">
                <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</div>
                <div>
                    <strong>{{ $job['title'] }}</strong>
                    <p>{{ $job['location'] }}</p>
                    <p>{{ $job['description'] }}</p>
                    <p>{{ $job['compensation'] }}</p>
                </div>
            </a>
        @endforeach
    </div>
    <div>
        {{ $jobs->links() }}
    </div>
</x-layout>