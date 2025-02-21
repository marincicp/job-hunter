<x-layout>

    <x-page-heading>New Job</x-page-heading>



    <x-form.form method="POST" action="/jobs">


        <x-form.input label="Title" name="title" placeholder="CEO" />
        <x-form.input label="Salary" name="salary" placeholder="$50,000" />
        <x-form.input label="Location" name="location" placeholder="Winter Park, Florida" />


        <x-form.select label="Scehdule" name="schedule">


            <option value="Full Time">Part Time</option>
            <option value="Part Time">Full Time</option>

        </x-form.select>


        <x-form.input label="URL" name="url" placeholder="asdas" />
        <x-form.checkbox label="Feature (Costs Extra)" name="featured" />

        <x-form.divider />

        <x-form.input label="Tags (comma separetor)" name="tags" placeholder="web,tech" />


        <x-form.button>Publish</x-form.button>




    </x-form.form>


</x-layout>
