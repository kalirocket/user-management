@props([
    'title' => '😎',
])

<x-shell title="{{ $title }}">
    <main>
        {{ $slot }}
    </main>
</x-shell>
