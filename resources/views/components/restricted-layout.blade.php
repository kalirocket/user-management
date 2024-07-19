@props([
    'title' => '😎',
])

<x-shell title="{{ $title }}">
    <x-navbar />
    {{ $slot }}
</x-shell>
