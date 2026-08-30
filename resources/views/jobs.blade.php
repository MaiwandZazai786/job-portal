<x-layout>
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>
    @if ($jobs)
        <div class="space-y-4 border border-gray-200 p-5">
            @foreach ($jobs as $job)
                <a href="/job/{{ $job['id'] }}"
                    class=" block px-4 py-6 border border-gray-200 rounded-lg hover:border-gray-300">
                    <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</div>
                    <div>
                        <strong>{{ $job['title'] }}:</strong> Pays ${{ $job['salary'] }} per year.
                    </div>
                </a>
            @endforeach
            <div>
                {{ $jobs->links() }}
            </div>
        </div>
    @endif
</x-layout>
