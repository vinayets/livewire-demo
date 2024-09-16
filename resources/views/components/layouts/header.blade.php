
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', $lang ?? app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        <p>HOME | ABOUT | BLOG | CONTACT</p>
        <hr />
        {{ $slot }}
        <hr />
        <p>ETS &copy; {{ date('Y') }}</p>
    </body>
</html>