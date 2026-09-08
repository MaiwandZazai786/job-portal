<x-layout>
    <x-slot:heading>
        Job Details
    </x-slot:heading>
    @if ($job)
        <h1 class="font-bold text-lg">{{ $job['title'] }}</h1>
        <h1 class="font-bold text-lg">Employer: {{ $job->employer->name }}</h1>
        <p>this job pays ${{ $job['salary'] }} per year.</p>
    @elseif ($job === null)
        <h1>Job Not Found!</h1>
    @endif

    <p class="mt-4">
        <x-edit-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-edit-button>
    </p>

</x-layout>
