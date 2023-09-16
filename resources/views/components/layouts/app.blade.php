<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema - {{ $title ?? '' }}</title>
</head>

<body>
    <x-layouts.nav />
    {{ $slot }}
</body>

</html>
