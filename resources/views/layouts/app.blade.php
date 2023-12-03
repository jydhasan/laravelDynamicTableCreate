<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
</head>
<body>
    <header>
        <h1>My Laravel App Header</h1>
    </header>

    <div>
        @yield('content')
    </div>

    <footer>
        <p>My Laravel App Footer</p>
    </footer>
</body>
</html>
