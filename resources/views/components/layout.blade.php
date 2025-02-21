<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Ineed</title>
</head>

<body class="bg-black text-white">


    <div class="p-4">
        <nav class="flex justify-between items-center border-b border-white/10">

            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/avatar.jpg') }}" alt="logo" width="50">
                </a>
            </div>
            <div class=" space-x-4 font-bold">

                <a href="#">Jobs</a>
                <a href="#">Carrers</a>
                <a href="#">Companies</a>

            </div>

            @auth

                <div class="flex">

                    <a href="/jobs/create">Post a Job</a>

                    <form action="/logout" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Logout</button>
                    </form>
                </div>
            @endauth

            @guest
                <a href="/register">Sing Up</a>
                <a href="/login">Log In</a>
            @endguest

        </nav>

    </div>

    <main class="mt-10 max-w-[986px] mx-auto">{{ $slot }}</main>
</body>

</html>
