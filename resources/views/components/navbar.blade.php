@php
    $links = [
        ['label' => 'Tentang', 'href' => '#tentang'],
        ['label' => 'Paket Layanan', 'href' => '#paket'],
        ['label' => 'Venue Bintaro', 'href' => '#venue'],
        ['label' => 'Galeri Client', 'href' => '#galeri'],
        ['label' => 'Konsultasi', 'href' => '#konsultasi'],
    ];
@endphp

<header class="sticky top-0 z-40 border-b border-hairline bg-cream/95 backdrop-blur">
    <nav class="mx-auto flex max-w-6xl items-center justify-between px-5 py-4 md:px-8" aria-label="Utama">
        <a href="#top" class="font-serif text-2xl leading-none tracking-tight text-ink">
            Fyacha Wedding
        </a>

        <div class="hidden items-center gap-8 md:flex">
            @foreach ($links as $link)
                <a href="{{ $link['href'] }}"
                   class="text-sm text-ink-soft transition-colors hover:text-ink">
                    {{ $link['label'] }}
                </a>
            @endforeach
        </div>

        <div class="hidden md:block">
            <x-wa-button
                message="Halo Fyacha Wedding, saya ingin berkonsultasi mengenai layanan pernikahan Anda."
                variant="solid"
                class="px-5 py-2.5"
            >
                Konsultasi
            </x-wa-button>
        </div>

        <button
            type="button"
            id="nav-toggle"
            class="inline-flex h-10 w-10 items-center justify-center rounded-sm text-ink focus:outline-none focus-visible:ring-2 focus-visible:ring-terracotta md:hidden"
            aria-controls="nav-panel"
            aria-expanded="false"
            aria-label="Buka menu"
        >
            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5" />
            </svg>
        </button>
    </nav>

    <div id="nav-panel" class="hidden border-t border-hairline bg-cream px-5 pb-6 pt-2 md:hidden">
        <div class="flex flex-col">
            @foreach ($links as $link)
                <a href="{{ $link['href'] }}"
                   class="border-b border-hairline py-3 text-sm text-ink-soft transition-colors hover:text-ink">
                    {{ $link['label'] }}
                </a>
            @endforeach
        </div>
        <div class="mt-5">
            <x-wa-button
                message="Halo Fyacha Wedding, saya ingin berkonsultasi mengenai layanan pernikahan Anda."
                variant="solid"
                class="w-full"
            >
                Konsultasi via WhatsApp
            </x-wa-button>
        </div>
    </div>
</header>
