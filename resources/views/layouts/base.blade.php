<!DOCTYPE html>
<html>

<head>
    @hasSection('title')
        <title>@yield('title') - {{ config('app.name') }}</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endif
    @livewireStyles
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="container">
        @yield('body')
    </div>
    @livewireScripts
</body>


</html>
