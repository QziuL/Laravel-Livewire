<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel - Livewire</title>

    @livewireStyles
</head>
<body>
    {{ $slot }} <!-- RENDER LIVEWIRE COMPONENTS -->
    
    @livewireScripts
</body>
</html>