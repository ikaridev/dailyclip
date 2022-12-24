<!DOCTYPE html>
<html data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DailyClip</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/pico.min.css">
    <script async type="application/javascript" src="https://a.realsrv.com/ad-provider.js"></script> 
</head>
<body>
    <header class="main-header container">
        <nav>
            <ul>
            <li><strong>DailyClip</strong></li>
            </ul>
            <ul>
                <li><a href="#"></a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="#" role="button">Clip aleatorio</a></li>
            </ul>
        </nav>
    </header>
    <main class="main-content container">
        @yield('content')
    </main>
    
    <footer>
        @yield('footer')
    </footer>
</body>
</html>
