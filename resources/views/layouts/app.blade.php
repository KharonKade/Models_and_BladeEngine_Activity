<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books List</title>
    @vite('resources/css/app.css') 
</head>
<body class="bg-gray-100">
    @include('partials.header')

    <main class="py-8">
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>
