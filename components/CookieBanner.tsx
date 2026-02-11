'use client';

import { useState, useEffect } from 'react';
import Link from 'next/link';

export default function CookieBanner() {
  const [showBanner, setShowBanner] = useState(false);

  useEffect(() => {
    // Check if user has already accepted cookies
    const cookiesAccepted = localStorage.getItem('cookiesAccepted');
    if (!cookiesAccepted) {
      setShowBanner(true);
    }
  }, []);

  const acceptCookies = () => {
    localStorage.setItem('cookiesAccepted', 'true');
    setShowBanner(false);
  };

  const rejectCookies = () => {
    localStorage.setItem('cookiesAccepted', 'false');
    setShowBanner(false);
  };

  if (!showBanner) return null;

  return (
    <div className="fixed bottom-0 left-0 right-0 z-50 bg-white border-t-4 border-[#5BC0EB] shadow-2xl">
      <div className="max-w-7xl mx-auto px-5 py-6">
        <div className="flex flex-col md:flex-row items-center justify-between gap-4">
          <div className="flex-1 text-center md:text-left">
            <p className="text-slate-700 text-sm md:text-base">
              🍪 Utilizamos cookies para mejorar tu experiencia en nuestra web. Al continuar navegando, aceptas nuestra{' '}
              <Link href="/politica-privacidad" className="text-[#5BC0EB] hover:underline font-semibold">
                Política de Privacidad
              </Link>
              .
            </p>
          </div>
          <div className="flex gap-3 flex-shrink-0">
            <button
              onClick={rejectCookies}
              className="px-6 py-2 border-2 border-slate-300 text-slate-700 rounded-full font-semibold hover:bg-slate-50 transition-colors"
            >
              Rechazar
            </button>
            <button
              onClick={acceptCookies}
              className="px-6 py-2 bg-[#E85D75] hover:bg-[#d54a63] text-white rounded-full font-semibold transition-all shadow-[0_3px_0_0_#b94456] hover:shadow-[0_2px_0_0_#b94456] hover:translate-y-[1px]"
            >
              Aceptar
            </button>
          </div>
        </div>
      </div>
    </div>
  );
}
