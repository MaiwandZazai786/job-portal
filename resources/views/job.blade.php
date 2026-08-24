<x-layout>
    <x-slot:heading>
        Viewing Job
    </x-slot:heading>
    <ul>
        <li><strong>{{ $job['title'] }}:</strong> Pays ${{ $job['salary'] }} per year.</li>
    </ul>
</x-layout>
