<!doctype html>
<html lang="en">

<head>
    <title>#madewithtwill website</title>
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div>
        @yield('content')
    </div>
    @livewireScripts
</body>

</html>
