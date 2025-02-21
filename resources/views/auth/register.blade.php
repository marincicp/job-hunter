<x-layout>

    <x-page-heading>Register</x-page-heading>



    <x-form.form method="POST" action="/register" enctype="multipart/form-data">
        <x-form.input label="Your name" name="name" />
        <x-form.input label="Email" name="email" type="email" />

        <x-form.input label="Password" name="password" type="password" />

        <x-form.input label="Password Confirmation" name="password_confirmation" type="password" />


        <x-form.button>Create Account</x-form.button>

        <x-form.divider />
        <x-form.input label="Employer Name" name="employer" />
        <x-form.input label="Employer Logo" name="logo" type="file" />
    </x-form.form>
</x-layout>
