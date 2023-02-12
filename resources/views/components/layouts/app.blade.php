<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $metaDescription ?? 'deffault meta description' }}">
    <title> Indiana | {{ $title ?? '' }} </title>
</head>

<body>
    <x-layouts.nav name="nav" />
    {{ $slot }}
</body>

</html>
