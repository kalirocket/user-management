@props([
    'title' => '😎',
])

<x-shell title="{{ $title }}">
    {{ $slot }}
</x-shell>
