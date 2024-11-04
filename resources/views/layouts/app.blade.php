<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application')</title>
    <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}"> <!-- Updated to use Tailwind CSS -->
</head>
<body class="bg-gray-100"> <!-- Added a background color for better aesthetics -->
    <div class="container mx-auto p-4"> <!-- Center the container and add some padding -->
        @yield('content')
    </div>
</body>
</html>
