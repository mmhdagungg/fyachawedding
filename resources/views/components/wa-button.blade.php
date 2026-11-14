@props(['message', 'variant' => 'solid'])

@php
    $base = 'inline-flex items-center justify-center gap-2 rounded-sm text-sm font-medium transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-offset-cream focus-visible:ring-terracotta';
    $variants = [
        'solid' => 'bg-terracotta text-cream hover:bg-ink px-6 py-3',
        'outline' => 'border border-hairline text-ink hover:border-ink hover:bg-oat px-6 py-3',
        'link' => 'text-terracotta underline-offset-4 hover:underline',
    ];
    $class = $base . ' ' . ($variants[$variant] ?? $variants['solid']);
@endphp

<a href="#" data-wa-message="{{ $message }}" {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</a>
