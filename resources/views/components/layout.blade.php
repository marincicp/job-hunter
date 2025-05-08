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


    <div class="p-4 sticky shadow top-0 z-10 bg-black">
        <nav class=" flex justify-between items-center border-b border-white/10 p-2">

            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/avatar.jpg') }}" alt="logo" width="50">
                </a>
            </div>
            <div class=" space-x-4 font-bold">

                <a href="/">Jobs</a>
                <a href="#">Carrers</a>

                @auth

                    <a href="/jobs/employer/{{ Auth::user()->employer->id }}">My jobs</a>
                @endauth

            </div>

            <div class="flex gap-8 items-center justify-center">

                @auth

                    <x-nav-link href="/jobs/create" label="Post a Job" />
                    <form action="/logout" method="POST">
                        @csrf
                        @method('DELETE')
                        <button
                            class="bg-gray-200 rounded text-black p-2 hover:bg-white transition-all duration-300">Logout</button>
                    </form>
                @endauth

                @guest


                    <x-nav-link href="/register" label="Sign Up" />
                    <x-nav-link href="/login" label="Log In" />

                @endguest
            </div>

        </nav>

    </div>

    <main class="mt-10 max-w-[986px] mx-auto">{{ $slot }}</main>
</body>

</html>
