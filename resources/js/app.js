// ── Scroll reveal ────────────────────────────────────────────
const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry, i) => {
        if (entry.isIntersecting) {
            setTimeout(() => entry.target.classList.add('visible'), i * 80);
            revealObserver.unobserve(entry.target);
        }
    });
}, { threshold: 0.08 });

document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

// ── Scroll progress ──────────────────────────────────────────
window.addEventListener('scroll', () => {
    const progress = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
    const bar = document.getElementById('scroll-progress');
    if (bar) bar.style.width = Math.min(progress, 100) + '%';

    const btn = document.getElementById('back-to-top');
    if (btn) {
        if (window.scrollY > 400) {
            btn.classList.remove('opacity-0', 'translate-y-4');
        } else {
            btn.classList.add('opacity-0', 'translate-y-4');
        }
    }
}, { passive: true });

// ── Dark mode init ───────────────────────────────────────────
// Applied via Alpine.js in the HTML tag; this ensures correct
// initial state before Alpine loads.
const savedTheme = localStorage.getItem('theme');
if (savedTheme === 'dark' || (!savedTheme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark');
} else {
    document.documentElement.classList.remove('dark');
}
