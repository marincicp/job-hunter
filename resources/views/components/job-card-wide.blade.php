@props(['employer', 'job'])

<div
    class="bg-white/5 p-4 rounded flex gap-6  border border-transparent hover:border-blue-500 group transition-all duration-300 ">
    <div>

        {{-- <img src="{{ Vite::asset('resources/images/avatar.jpg') }}" alt="logo" width="90"> --}}
        <x-employer-logo :employer="$job->employer" />
    </div>


    <div class="flex-1 flex flex-col group-hover:text-blue-500 transition-all duration-300 ">

        <a href="#" class="self-start text-sm text-gray-500">{{ $job->employer->name }}</a>

        <h3 class="font-bold text-lg mt-1">{{ $job->title }}</h3>
        <p class="text-gray-500 mt-auto ">{{ $job->schedule }} - {{ $job->salary }}</p>
    </div>

    <div class="">

        @foreach ($job->tags as $tag)
            <x-tag :$tag />
        @endforeach
    </div>






</div>
