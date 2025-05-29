<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @livewireStyles
    
</head>
</head>
<body>
    
    <!-- Navbar Component -->
    @livewire('components.navbar')
    
    <!-- Main Content -->
    <main">
        @yield('content')
    </main>
    @livewire('components.footer')
    @livewireScripts
    
</body>
</html>