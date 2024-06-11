<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        
        <!-- Scripts -->
        <link href="{{ asset('css/main.css') }}" rel="stylesheet"> 
        @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
    </head> 
    
    <body>
        <h1>Main Content</h1>
        <div class='main-container'>
            <p class='main-textLbl'>Try to style this using public/css/main.css !</p>
        </div>

        <div class='test-container'>
            <p class='test-textLbl'>Try to style this using test.css!</p>
        </div>

        <div class='sass-container'>
            <p class='sass-textLbl'>Try to style this using sass!</p>
        </div>    
    </body>
</html>
