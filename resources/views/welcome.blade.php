<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
        <title>TipTap Demo</title>
        @livewireStyles
    </head>

    <body class="bg-gray-100 p-8">
        <h1 class="text-gray-800 text-3xl font-semibold text-center">TipTap Livewire Demo</h1>
        <!-- The editor component -->
        <livewire:editor />

        @livewireScripts
        <script src="{{asset('js/app.js')}}" defer></script>
    </body>
</html>
