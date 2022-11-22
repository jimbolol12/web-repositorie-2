<!DOCTYPE html>
<html lang="en">
<head>
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        @include('components.header')
    </header>

    <main>
        @yield('content')
    </main>
</body>

</form>
</html>