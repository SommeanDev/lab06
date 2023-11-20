<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/f2b107cee6.js" crossorigin="anonymous"></script>
    <title>Welcome to app</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen text-white bg-black">
    @include('layouts.navbar')
    <main class="flex-1">
        @yield('contents')
    </main>
    @include('layouts.footer')
</body>
</html>
