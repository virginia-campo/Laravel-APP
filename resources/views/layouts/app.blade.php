
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', 'My Laravel App')</title>

    @vite([
        'resources/css/app.css',
        'resources/css/custom.css',
        'resources/js/app.js'
    ])
</head>
<body>
    <div class="page-wrapper">
        <header class="site-header">
            <div class="container">
                <a href="/home" class="logo">Laravel<span>.</span></a>
                <p class="tagline">Building something great</p>
            </div>
        </header>

        <nav class="site-nav">
            <div class="container nav-links">
                <a href="/home">Home</a>
                <a href="/contact">Contact</a>
                <a href="/about">About</a>
            </div>
        </nav>

        <main class="main-content container">
            @yield('content')
        </main>

        <footer class="site-footer">
            <div class="container">
                <p>&copy; {{ date('Y') }} My Laravel App. All rights reserved.</p>
            </div>
        </footer>
    </div>
</body>
</html>
