<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-meta>
    <title>{{ $title }}</title>
</x-meta>

<body>
    {{ $slot }}
</body>

</html>
