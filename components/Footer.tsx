import Link from 'next/link';
import Image from 'next/image';

export default function Footer() {
  return (
    <footer className="bg-[#1F2937] text-white py-8 px-5">
      <div className="max-w-7xl mx-auto text-center">
        <p className="text-slate-400 text-sm mb-2">
          &copy; 2026 Elementalkidsclub. Todos los derechos reservados.
        </p>
        <p className="text-slate-400 text-sm">
          <Link href="/" className="hover:text-[#FDB44B] transition-colors">
            elementalkidsclub.com
          </Link>
          {' | '}
          <Link href="/politica-privacidad" className="hover:text-[#FDB44B] transition-colors">
            Política de Privacidad
          </Link>
        </p>
      </div>
    </footer>
  );
}
