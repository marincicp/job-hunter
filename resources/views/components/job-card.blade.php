@props(['job'])

<div
    class="bg-white/5 p-4 rounded flex flex-col text-center  border border-transparent hover:border-blue-500 group transition-all duration-300">


    <div class="self-start text-sm">{{ $job->employer->name }}</div>

    <div class="py-8  group-hover:text-blue-500 transition-all duration-300 ">
        <h3 class="text-xl font-bold">{{ $job->title }}</h3>
        <p class="text-sm mt-4">{{ $job->schedule }} - {{ $job->salary }}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>

            @foreach ($job->tags as $tag)
                <x-tag size="small" :$tag />
            @endforeach

        </div>
        <x-employer-logo :employer="$job->employer" :width="42" />
    </div>






</div>
