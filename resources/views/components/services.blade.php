@php
    $services = [
        [
            'name' => 'Paket Komplit + Venue',
            'tagline' => 'All-In Area Bintaro',
            'description' => 'Solusi pernikahan terima beres khusus di area Bintaro. Semua kebutuhan hari-H disiapkan dari ujung ke ujung, tinggal Anda hadir dan merayakan.',
            'items' => ['Pilihan venue eksklusif', 'Dekorasi & tata panggung', 'Katering', 'Dokumentasi foto & video', 'Koordinasi tim WO penuh'],
            'message' => 'Halo Fyacha Wedding, saya ingin konsultasi Paket Komplit + Venue (All-In Area Bintaro). Mohon informasinya, terima kasih.',
        ],
        [
            'name' => 'Man Power / Wedding Organizer',
            'tagline' => 'D-Day Crew',
            'description' => 'Tim kru profesional dan freelancer berpengalaman yang menjaga hari-H berjalan tenang dan tepat waktu, dari rundown hingga koordinasi seluruh vendor.',
            'items' => ['Kru hari-H berpengalaman', 'Rundown & timeline acara', 'Koordinasi seluruh vendor', 'Pengawasan jalannya acara', 'Crew cadangan untuk antisipasi'],
            'message' => 'Halo Fyacha Wedding, saya ingin konsultasi layanan Man Power / Wedding Organizer (D-Day Crew). Mohon informasinya, terima kasih.',
        ],
        [
            'name' => 'Paket Custom',
            'tagline' => 'Fleksibel Lokasi & Budget',
            'description' => 'Perencanaan pernikahan yang sepenuhnya menyesuaikan konsep, lokasi pilihan Anda (di luar Bintaro), dan anggaran calon pengantin.',
            'items' => ['Konsep sesuai selera Anda', 'Lokasi di luar Bintaro', 'Menyesuaikan anggaran', 'Dukungan tim sesuai kebutuhan'],
            'message' => 'Halo Fyacha Wedding, saya ingin konsultasi Paket Custom (Fleksibel Lokasi & Budget). Mohon informasinya, terima kasih.',
        ],
    ];
@endphp

<section id="paket" class="border-t border-hairline py-24 md:py-32">
    <div class="mx-auto max-w-6xl px-5 md:px-8">
        <div class="max-w-2xl">
            <h2 class="font-serif text-4xl font-light leading-tight text-ink md:text-5xl">
                Tiga pilar layanan Fyacha Wedding.
            </h2>
            <p class="mt-6 text-base leading-relaxed text-ink-soft">
                Apa pun bentuk perayaan yang Anda bayangkan, ada satu jalan untuk mewujudkannya.
                Pilih paket yang paling dekat dengan kebutuhan Anda.
            </p>
        </div>

        <div class="mt-16 border-t border-hairline">
            @foreach ($services as $index => $service)
                <article class="grid grid-cols-1 gap-6 border-b border-hairline py-12 md:grid-cols-12 md:gap-10">
                    <div class="md:col-span-4">
                        <h3 class="font-serif text-3xl font-normal leading-tight text-ink">
                            {{ $service['name'] }}
                        </h3>
                        <p class="mt-3 text-sm tracking-wide text-terracotta">
                            {{ $service['tagline'] }}
                        </p>
                    </div>

                    <div class="md:col-span-5">
                        <p class="text-base leading-relaxed text-ink-soft">
                            {{ $service['description'] }}
                        </p>
                        <ul class="mt-6 space-y-2.5">
                            @foreach ($service['items'] as $item)
                                <li class="flex items-start gap-3 text-sm text-ink-soft">
                                    <svg class="mt-0.5 h-4 w-4 shrink-0 text-olive" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                    </svg>
                                    <span>{{ $item }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="flex items-start md:col-span-3 md:justify-end">
                        <x-wa-button :message="$service['message']" variant="outline" class="px-5 py-2.5">
                            Konsultasi Paket Ini
                        </x-wa-button>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
