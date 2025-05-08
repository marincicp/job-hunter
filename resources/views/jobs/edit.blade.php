<x-layout>

    <x-page-heading>Edit a Job: {{ $job->title }}</x-page-heading>



    <x-form.form method="POST" extraMethod="PUT" action="{{ route('jobs.update', $job->id) }}">


        <x-form.input label="Title" name="title" placeholder="CEO" value="{{ $job->title }}" />
        <x-form.input label="Salary" name="salary" placeholder="$50,000" value="{{ $job->salary }}" />
        <x-form.input label="Location" name="location" placeholder="Winter Park, Florida"
            value="{{ $job->location }}" />


        <x-form.select label="Scehdule" name="schedule" defa>


            <option selected={{ $job->schedule === 'Full Time' }} value="Part Time">Part Time</option>
            <option selected={{ $job->schedule === 'Full Time' }} value="Part Time">Full Time</option>

        </x-form.select>


        <x-form.input label="URL" name="url" placeholder="asdas" value="{{ $job->url }}" />
        <x-form.checkbox label="Feature (Costs Extra)" name="featured" checked="{{ $job->featured }}" />

        <x-form.divider />

        <x-form.input label="Tags (comma separetor)" name="tags" placeholder="web,tech" />


        <x-form.button>Edit</x-form.button>




    </x-form.form>


</x-layout>
