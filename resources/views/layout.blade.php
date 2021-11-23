<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homeserver Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="w-full bg-blue-400 min-h-screen">
    <div class="w-full md:w-2/3 px-3 md:mx-auto">
        <div class="text-center text-gray-50 py-10">
            <h1 class="font-bold text-4xl">Homeserver</h1>
            <p>IP: {{ config('app.appIp') }}</p>
        </div>
        @yield('content')
    </div>
</div>
</body>
</html>