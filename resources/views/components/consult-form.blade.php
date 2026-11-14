<section id="konsultasi" class="bg-oat py-24 md:py-32">
    <div class="mx-auto max-w-6xl px-5 md:px-8">
        <div class="grid grid-cols-1 gap-14 md:grid-cols-12">
            <div class="md:col-span-5">
                <h2 class="font-serif text-4xl font-light leading-tight text-ink md:text-5xl">
                    Mulailah dengan sebuah percakapan.
                </h2>
                <p class="mt-6 max-w-prose text-base leading-relaxed text-ink-soft">
                    Ceritakan rencana pernikahan Anda. Isi beberapa hal singkat di bawah ini,
                    dan kami akan membalasnya lewat WhatsApp — tanpa komitmen, tanpa paksaan.
                </p>
            </div>

            <div class="md:col-span-7">
                <form id="consult-form" class="grid grid-cols-1 gap-x-8 gap-y-8 sm:grid-cols-2">
                    <div class="sm:col-span-2">
                        <label for="nama" class="block text-sm text-ink-soft">Nama Pasangan</label>
                        <input
                            id="nama"
                            name="nama"
                            type="text"
                            required
                            autocomplete="name"
                            placeholder="Raka & Nadya"
                            class="mt-2 w-full border-b border-hairline bg-transparent py-2 text-base text-ink placeholder:text-ink-soft/50 focus:border-ink focus:outline-none"
                        >
                    </div>

                    <div>
                        <label for="tanggal" class="block text-sm text-ink-soft">Rencana Tanggal Pernikahan</label>
                        <input
                            id="tanggal"
                            name="tanggal"
                            type="date"
                            required
                            class="mt-2 w-full border-b border-hairline bg-transparent py-2 text-base text-ink focus:border-ink focus:outline-none"
                        >
                    </div>

                    <div>
                        <label for="paket" class="block text-sm text-ink-soft">Pilihan Paket</label>
                        <select
                            id="paket"
                            name="paket"
                            required
                            class="mt-2 w-full border-b border-hairline bg-transparent py-2 text-base text-ink focus:border-ink focus:outline-none"
                        >
                            <option value="All-In Bintaro">All-In Bintaro</option>
                            <option value="Man Power WO">Man Power WO</option>
                            <option value="Paket Custom">Paket Custom</option>
                        </select>
                    </div>

                    <div>
                        <label for="tamu" class="block text-sm text-ink-soft">Estimasi Jumlah Tamu</label>
                        <input
                            id="tamu"
                            name="tamu"
                            type="number"
                            min="0"
                            placeholder="Contoh: 300"
                            class="mt-2 w-full border-b border-hairline bg-transparent py-2 text-base text-ink placeholder:text-ink-soft/50 focus:border-ink focus:outline-none"
                        >
                    </div>

                    <div class="sm:col-span-2">
                        <label for="catatan" class="block text-sm text-ink-soft">Catatan Lokasi / Budget</label>
                        <textarea
                            id="catatan"
                            name="catatan"
                            rows="3"
                            placeholder="Contoh: ingin resepsi outdoor di Serpong, budget sekitar 150 juta"
                            class="mt-2 w-full resize-none border-b border-hairline bg-transparent py-2 text-base text-ink placeholder:text-ink-soft/50 focus:border-ink focus:outline-none"
                        ></textarea>
                    </div>

                    <div class="sm:col-span-2">
                        <button
                            type="submit"
                            class="inline-flex items-center justify-center gap-2 rounded-sm bg-terracotta px-7 py-3.5 text-sm font-medium text-cream transition-colors hover:bg-ink focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-offset-oat focus-visible:ring-terracotta"
                        >
                            Kirim via WhatsApp
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
