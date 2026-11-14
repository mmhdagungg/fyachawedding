# Fyacha Wedding — Landing Page

Landing page resmi **Fyacha Wedding**, sebuah wedding planner & organizer dengan
tiga pilar layanan: **Paket Komplit + Venue (All-In Bintaro)**, **Man Power /
Wedding Organizer (D-Day Crew)**, dan **Paket Custom (Fleksibel Lokasi & Budget)**.

Halaman dirancang dengan nuansa hangat, intim, dan editorial — latar krem hangat,
tipografi serif romantis, dan aksen terracotta/olive yang tenang. Seluruh halaman
responsif (mobile-first) dan menggunakan Vanilla JavaScript secukupnya.

## Fitur

- Navbar minimalis dengan menu mobile.
- Hero full-bleed dengan foto suasana pernikahan.
- Bagian Tentang dengan tata letak dua kolom asimetris.
- Tiga paket layanan dengan tombol **Konsultasi Paket Ini** yang mengarah ke
  WhatsApp dengan pesan otomatis sesuai paket.
- Highlight Venue Bintaro (suasana, kapasitas, catatan Paket Custom).
- Galeri client editorial dengan **lightbox** (Vanilla JS).
- Form konsultasi yang menyusun pesan rapi dan membuka WhatsApp di tab baru —
  **tanpa menyimpan ke database**.
- Footer dengan area layanan, tautan Instagram/WhatsApp, dan kredit developer.

## Tech Stack

- **Laravel 12** — routing di `routes/web.php`.
- **Laravel Blade** — komponen di `resources/views/components/`.
- **Tailwind CSS v4** — konfigurasi theme via `@theme` di `resources/css/app.css`.
- **Vite** — bundling asset.
- **Vanilla JavaScript** — `resources/js/app.js` (menu mobile, lightbox, generator WhatsApp).

## Kebutuhan

- PHP >= 8.2
- Composer
- Node.js >= 18 & npm

## Menjalankan Proyek

```bash
# 1. Install dependency PHP
composer install

# 2. Salin environment & generate app key
cp .env.example .env
php artisan key:generate

# 3. Install dependency front-end
npm install

# 4. Jalankan server pengembangan
php artisan serve
```

Buka `http://127.0.0.1:8000`.

Untuk pengembangan front-end (Tailwind/Vite dengan hot reload), jalankan di
terminal terpisah:

```bash
npm run dev
```

Untuk build produksi:

```bash
npm run build
```

> Catatan: proyek ini tidak memerlukan database. `SESSION_DRIVER`, `CACHE_STORE`,
> dan `QUEUE_CONNECTION` diset ke driver berbasis file/sync di `.env`.

## Konfigurasi WhatsApp

Nomor WhatsApp diatur di satu tempat — konstanta `WA_NUMBER` pada
`resources/js/app.js`:

```js
const WA_NUMBER = '6281234567890'; // ganti dengan nomor asli
```

Setelah diubah, jalankan `npm run build` agar asset ter-update.

## Struktur Proyek

```
routes/web.php                              # route halaman utama
resources/css/app.css                       # Tailwind v4 + token theme
resources/js/app.js                         # Vanilla JS (menu, lightbox, WhatsApp)
resources/views/welcome.blade.php           # komposisi halaman
resources/views/components/                 # navbar, hero, about, services,
                                            # venue, gallery, consult-form, footer
```

## Konten & Aset

- Foto memakai hotlink dari **Unsplash** (butuh koneksi internet saat runtime).
- Nomor WhatsApp masih berupa placeholder; ganti sebelum go-live.
- Copywriting berbahasa Indonesia dan dapat disesuaikan di komponen Blade terkait.

## Developer

Dibuat oleh **Moehammad Agung** — [agunggportfolio.netlify.app](https://agunggportfolio.netlify.app/)

## Lisensi

Proyek ini dibuat khusus untuk Fyacha Wedding. Hak cipta dilindungi.
