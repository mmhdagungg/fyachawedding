/* Fyacha Wedding — vanilla JS (menu mobile, lightbox, generator WhatsApp) */

const WA_NUMBER = '6281234567890';

const waUrl = (message) =>
    `https://wa.me/${WA_NUMBER}?text=${encodeURIComponent(message)}`;

/* ------------------------------------------------------------------ *
 * 1. WhatsApp links — any element carrying [data-wa-message]
 * ------------------------------------------------------------------ */
document.querySelectorAll('[data-wa-message]').forEach((el) => {
    el.addEventListener('click', (event) => {
        event.preventDefault();
        window.open(waUrl(el.dataset.waMessage), '_blank', 'noopener,noreferrer');
    });
});

/* ------------------------------------------------------------------ *
 * 2. Mobile navigation
 * ------------------------------------------------------------------ */
const navToggle = document.getElementById('nav-toggle');
const navPanel = document.getElementById('nav-panel');

if (navToggle && navPanel) {
    const setOpen = (open) => {
        navPanel.classList.toggle('hidden', !open);
        navToggle.setAttribute('aria-expanded', String(open));
    };

    navToggle.addEventListener('click', () => {
        const isOpen = navToggle.getAttribute('aria-expanded') === 'true';
        setOpen(!isOpen);
    });

    navPanel.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => setOpen(false));
    });
}

/* ------------------------------------------------------------------ *
 * 3. Gallery lightbox
 * ------------------------------------------------------------------ */
const lightbox = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightbox-img');
const lightboxCaption = document.getElementById('lightbox-caption');

if (lightbox && lightboxImg) {
    const open = (item) => {
        lightboxImg.src = item.dataset.full;
        lightboxImg.alt = item.dataset.caption || '';
        if (lightboxCaption) lightboxCaption.textContent = item.dataset.caption || '';
        lightbox.classList.remove('hidden');
        lightbox.classList.add('flex');
        document.body.classList.add('overflow-hidden');
    };

    const close = () => {
        lightbox.classList.add('hidden');
        lightbox.classList.remove('flex');
        document.body.classList.remove('overflow-hidden');
        lightboxImg.src = '';
    };

    document.querySelectorAll('[data-gallery]').forEach((item) => {
        item.addEventListener('click', () => open(item));
    });

    lightbox.querySelectorAll('[data-lightbox-close]').forEach((btn) => {
        btn.addEventListener('click', close);
    });

    lightbox.addEventListener('click', (event) => {
        if (event.target === lightbox) close();
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && !lightbox.classList.contains('hidden')) {
            close();
        }
    });
}

/* ------------------------------------------------------------------ *
 * 4. Consultation form -> WhatsApp
 * ------------------------------------------------------------------ */
const consultForm = document.getElementById('consult-form');

if (consultForm) {
    consultForm.addEventListener('submit', (event) => {
        event.preventDefault();

        const data = new FormData(consultForm);
        const value = (key) => (data.get(key) || '').toString().trim();

        const lines = [
            'Halo Fyacha Wedding, saya ingin berkonsultasi.',
            '',
            `Nama Pasangan: ${value('nama')}`,
            `Rencana Tanggal: ${value('tanggal')}`,
            `Pilihan Paket: ${value('paket')}`,
            `Estimasi Tamu: ${value('tamu')}`,
            `Catatan Lokasi/Budget: ${value('catatan') || '-'}`,
        ];

        window.open(waUrl(lines.join('\n')), '_blank', 'noopener,noreferrer');
    });
}
