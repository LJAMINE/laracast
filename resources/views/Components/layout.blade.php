<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<nav>
    <a href="/">home</a>
    <a href="/about">about</a>
    <a href="/contact">contact</a>
</nav>

{{ $slot  }}
</body>
</html>