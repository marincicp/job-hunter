<x-layout>
    <div class="space-y-6">

        @if (empty($jobs))
            <p>No data to display</p>
        @endif

        @foreach ($jobs as $job)
            <x-job-card-wide :$job />
        @endforeach
    </div>
</x-layout>
