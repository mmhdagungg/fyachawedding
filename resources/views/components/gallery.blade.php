@php
    $photos = [
        ['src' => 'photo-1519741497674-611481863552', 'full' => 'w=1400', 'caption' => 'Raka & Nadya — All-In Bintaro'],
        ['src' => 'photo-1583939003579-730e3918a45a', 'full' => 'w=1400', 'caption' => 'Dimas & Alya — All-In Bintaro'],
        ['src' => 'photo-1511285560929-80b456fea0bc', 'full' => 'w=1400', 'caption' => 'Fajar & Sinta — Man Power WO'],
        ['src' => 'photo-1606800052052-a08af7148866', 'full' => 'w=1400', 'caption' => 'Bima & Rara — Paket Custom'],
        ['src' => 'photo-1465495976277-4387d4b0b4c6', 'full' => 'w=1400', 'caption' => 'Arga & Lintang — All-In Bintaro'],
        ['src' => 'photo-1522673607200-164d1b6ce486', 'full' => 'w=1400', 'caption' => 'Yuda & Maya — Man Power WO'],
        ['src' => 'photo-1591604466107-ec97de577aff', 'full' => 'w=1400', 'caption' => 'Rendra & Kirana — Paket Custom'],
        ['src' => 'photo-1525258946800-98cfd641d0de', 'full' => 'w=1400', 'caption' => 'Bagas & Dinda — All-In Bintaro'],
    ];
@endphp

<section id="galeri" class="border-t border-hairline py-24 md:py-32">
    <div class="mx-auto max-w-6xl px-5 md:px-8">
        <div class="flex flex-col gap-6 md:flex-row md:items-end md:justify-between">
            <div class="max-w-xl">
                <h2 class="font-serif text-4xl font-light leading-tight text-ink md:text-5xl">
                    Momen-momen yang kami dampingi.
                </h2>
                <p class="mt-6 text-base leading-relaxed text-ink-soft">
                    Sebagian cerita dari pasangan yang telah merayakan hari bahagia bersama
                    Fyacha Wedding. Klik foto untuk melihat lebih dekat.
                </p>
            </div>
        </div>

        <div class="mt-14 columns-2 gap-5 md:columns-3 lg:columns-4 [&>figure]:mb-5">
            @foreach ($photos as $photo)
                <figure class="break-inside-avoid">
                    <button
                        type="button"
                        data-gallery
                        data-full="https://images.unsplash.com/{{ $photo['src'] }}?{{ $photo['full'] }}&q=85&auto=format&fit=crop"
                        data-caption="{{ $photo['caption'] }}"
                        class="group block w-full overflow-hidden rounded-sm focus:outline-none focus-visible:ring-2 focus-visible:ring-terracotta"
                        aria-label="Lihat foto {{ $photo['caption'] }} lebih besar"
                    >
                        <img
                            src="https://images.unsplash.com/{{ $photo['src'] }}?w=800&q=80&auto=format&fit=crop"
                            alt="{{ $photo['caption'] }}"
                            class="w-full object-cover transition-transform duration-500 group-hover:scale-[1.02]"
                            loading="lazy"
                        >
                    </button>
                    <figcaption class="mt-2.5 text-sm text-ink-soft">
                        {{ $photo['caption'] }}
                    </figcaption>
                </figure>
            @endforeach
        </div>
    </div>
</section>

{{-- Lightbox --}}
<div id="lightbox" class="fixed inset-0 z-50 hidden items-center justify-center bg-ink/90 p-4" role="dialog" aria-modal="true" aria-label="Pratinjau foto">
    <button
        type="button"
        data-lightbox-close
        class="absolute right-5 top-5 inline-flex h-10 w-10 items-center justify-center rounded-sm text-cream/80 transition-colors hover:text-cream focus:outline-none focus-visible:ring-2 focus-visible:ring-cream"
        aria-label="Tutup"
    >
        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>
    </button>

    <figure class="flex max-h-full flex-col items-center">
        <img id="lightbox-img" src="" alt="" class="lightbox-img rounded-sm">
        <figcaption id="lightbox-caption" class="mt-4 text-sm text-cream/80"></figcaption>
    </figure>
</div>
