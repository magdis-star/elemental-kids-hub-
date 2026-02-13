<!-- Cookie Consent Banner -->
<div id="cookie-banner" class="fixed bottom-0 left-0 right-0 bg-white border-t-4 border-[#FDB44B] shadow-2xl z-50 transform translate-y-full transition-transform duration-500" style="display: none;">
    <div class="max-w-7xl mx-auto px-6 py-6">
        <div class="flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="flex-1">
                <p class="text-slate-800 text-sm md:text-base leading-relaxed">
                    🍪 Utilizamos cookies para mejorar tu experiencia en nuestro sitio web. Al continuar navegando, aceptas nuestra
                    <a href="/politica-de-cookies/" class="text-[#5BC0EB] hover:text-[#4a9bc9] underline font-semibold">Política de Cookies</a> y
                    <a href="/politica-de-privacidad/" class="text-[#5BC0EB] hover:text-[#4a9bc9] underline font-semibold">Política de Privacidad</a>.
                </p>
            </div>
            <div class="flex gap-3 flex-shrink-0">
                <button id="cookie-reject" class="bg-slate-200 hover:bg-slate-300 text-slate-800 font-bold py-3 px-6 rounded-full transition-colors border-2 border-slate-400 text-sm md:text-base">
                    Rechazar
                </button>
                <button id="cookie-accept" class="bg-[#5BC0EB] hover:bg-[#4a9bc9] text-white font-bold py-3 px-8 rounded-full transition-all shadow-[0_4px_0_0_#3a8ab0] hover:shadow-[0_2px_0_0_#3a8ab0] hover:translate-y-[2px] border-2 border-[#1F2937] text-sm md:text-base">
                    Aceptar
                </button>
            </div>
        </div>
    </div>
</div>

<script>
(function() {
    const banner = document.getElementById('cookie-banner');
    const acceptBtn = document.getElementById('cookie-accept');
    const rejectBtn = document.getElementById('cookie-reject');

    // Check if user has already made a choice
    const cookieConsent = localStorage.getItem('cookieConsent');

    if (!cookieConsent) {
        // Show banner after a short delay
        setTimeout(function() {
            banner.style.display = 'block';
            setTimeout(function() {
                banner.classList.remove('translate-y-full');
            }, 100);
        }, 1000);
    }

    // Accept cookies
    acceptBtn.addEventListener('click', function() {
        localStorage.setItem('cookieConsent', 'accepted');
        hideBanner();
    });

    // Reject cookies
    rejectBtn.addEventListener('click', function() {
        localStorage.setItem('cookieConsent', 'rejected');
        hideBanner();
    });

    function hideBanner() {
        banner.classList.add('translate-y-full');
        setTimeout(function() {
            banner.style.display = 'none';
        }, 500);
    }
})();
</script>
