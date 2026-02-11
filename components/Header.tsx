'use client';

import { useState } from 'react';
import Link from 'next/link';
import Image from 'next/image';

export default function Header() {
  const [mobileMenuOpen, setMobileMenuOpen] = useState(false);

  return (
    <header className="bg-white border-b-2 border-[#FDB44B] sticky top-0 z-40 shadow-sm">
      <div className="max-w-7xl mx-auto px-6 py-3 flex items-center justify-between">
        {/* Logo */}
        <Link href="/" className="flex items-center hover:opacity-90 transition-opacity">
          <Image
            src="/logo.png"
            alt="Elemental Kids Club"
            width={110}
            height={30}
            priority
            className="h-auto w-auto"
          />
        </Link>

        {/* Desktop Navigation */}
        <nav className="hidden md:flex items-center gap-8 ml-auto mr-8">
          <Link
            href="/#libros"
            className="text-[#1F2937] hover:text-[#5BC0EB] transition-colors font-medium relative group"
          >
            Libros
            <span className="absolute bottom-0 left-0 w-0 h-0.5 bg-[#5BC0EB] group-hover:w-full transition-all duration-300"></span>
          </Link>
          <Link
            href="/bonuses"
            className="text-[#1F2937] hover:text-[#5BC0EB] transition-colors font-medium relative group"
          >
            Bonuses
            <span className="absolute bottom-0 left-0 w-0 h-0.5 bg-[#5BC0EB] group-hover:w-full transition-all duration-300"></span>
          </Link>
          <Link
            href="/sobre-nosotros"
            className="text-[#1F2937] hover:text-[#5BC0EB] transition-colors font-medium relative group"
          >
            Sobre Nosotros
            <span className="absolute bottom-0 left-0 w-0 h-0.5 bg-[#5BC0EB] group-hover:w-full transition-all duration-300"></span>
          </Link>
          <Link
            href="/contacto"
            className="text-[#1F2937] hover:text-[#5BC0EB] transition-colors font-medium relative group"
          >
            Contacto
            <span className="absolute bottom-0 left-0 w-0 h-0.5 bg-[#5BC0EB] group-hover:w-full transition-all duration-300"></span>
          </Link>
        </nav>

        {/* Desktop CTA Button */}
        <a
          href="https://www.amazon.es/stores/Ediciones-Elemental-Kids-Club/author/B0G24P67WS?language=en&ref=ap_rdr&shoppingPortalEnabled=true"
          target="_blank"
          rel="noopener noreferrer"
          className="hidden md:inline-block bg-[#E85D75] hover:bg-[#d54a63] text-white px-7 py-3 rounded-full font-bold transition-colors shadow-[0_4px_0_0_#b94456] hover:shadow-[0_2px_0_0_#b94456] hover:translate-y-[2px] transition-all uppercase"
        >
          Comprar →
        </a>

        {/* Mobile Menu Button */}
        <button
          onClick={() => setMobileMenuOpen(!mobileMenuOpen)}
          className="md:hidden flex flex-col gap-1.5 p-2"
          aria-label="Toggle menu"
        >
          <span className={`block w-6 h-0.5 bg-[#1F2937] transition-all duration-300 ${mobileMenuOpen ? 'rotate-45 translate-y-2' : ''}`}></span>
          <span className={`block w-6 h-0.5 bg-[#1F2937] transition-all duration-300 ${mobileMenuOpen ? 'opacity-0' : ''}`}></span>
          <span className={`block w-6 h-0.5 bg-[#1F2937] transition-all duration-300 ${mobileMenuOpen ? '-rotate-45 -translate-y-2' : ''}`}></span>
        </button>
      </div>

      {/* Mobile Menu */}
      {mobileMenuOpen && (
        <div className="md:hidden bg-white border-t border-gray-200 shadow-lg">
          <nav className="flex flex-col p-5 space-y-4">
            <Link
              href="/#libros"
              onClick={() => setMobileMenuOpen(false)}
              className="text-[#1F2937] hover:text-[#5BC0EB] transition-colors font-medium py-2"
            >
              Libros
            </Link>
            <Link
              href="/bonuses"
              onClick={() => setMobileMenuOpen(false)}
              className="text-[#1F2937] hover:text-[#5BC0EB] transition-colors font-medium py-2"
            >
              Bonuses
            </Link>
            <Link
              href="/sobre-nosotros"
              onClick={() => setMobileMenuOpen(false)}
              className="text-[#1F2937] hover:text-[#5BC0EB] transition-colors font-medium py-2"
            >
              Sobre Nosotros
            </Link>
            <Link
              href="/contacto"
              onClick={() => setMobileMenuOpen(false)}
              className="text-[#1F2937] hover:text-[#5BC0EB] transition-colors font-medium py-2"
            >
              Contacto
            </Link>
            <a
              href="https://www.amazon.es/stores/Ediciones-Elemental-Kids-Club/author/B0G24P67WS?language=en&ref=ap_rdr&shoppingPortalEnabled=true"
              target="_blank"
              rel="noopener noreferrer"
              className="bg-[#E85D75] hover:bg-[#d54a63] text-white px-7 py-3 rounded-full font-bold text-center transition-colors shadow-[0_4px_0_0_#b94456] uppercase"
            >
              Comprar →
            </a>
          </nav>
        </div>
      )}
    </header>
  );
}
