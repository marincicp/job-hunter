<x-layout>


    <div class="space-y-10">

        <section class="text-center">
            <h1 class="text-4xl font-bold">Lets find your job</h1>
            {{-- <form action="" class="mt-6">
                <input type="text" placeholder="Web developer"
                    class=" rounded-xl bg-white/5 border-white/10 p-4 w-full max-w-lg" />
            </form> --}}

            <x-form.form action="/search" method="GET">
                <x-form.input name="query" class="mt-6" placeholder="Web Developer..." />

            </x-form.form>

        </section>


        <section class="pt-10">
            <x-section-heading>Featured jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($featuredJobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>
        </section>


        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-2">

                @foreach ($tags as $tag)
                    <x-tag :$tag>Tag</x-tag>
                @endforeach
            </div>
        </section>


        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
