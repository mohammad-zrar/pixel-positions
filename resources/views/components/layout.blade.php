<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    @vite(['resources/js/app.js'])
</head>

<body class="bg-black text-white pb-16">
    <div class="px-10">
        <nav class="flex  justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/"><img src="{{ Vite::asset('resources\images\logo.svg') }}" alt=""></a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>
            @auth
                <div>
                    <a href="/jobs/create">Post a Job</a>
                </div>
            @endauth

            @guest
                <div class="space-x-6 font-bold">
                    <a href="/register">Sign Up</a>
                    <a href="/login">Log In</a>
                </div>
            @endguest

        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
