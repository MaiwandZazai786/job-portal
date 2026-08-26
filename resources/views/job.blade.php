<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    @if ($job)
        <h1 class="font-bold text-lg">{{ $job['title'] }}</h1>
        <p>this job pays ${{ $job['salary'] }} per year.</p>
    @elseif ($job === null)
        <h1>Job Not Found!</h1>
    @endif

</x-layout>
