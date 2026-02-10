import Link from 'next/link';
import Image from 'next/image';

export default function HeroSection() {
  return (
    <section className="relative py-20 px-5" style={{
      backgroundColor: '#FEF3C7',
      backgroundImage: `
        linear-gradient(rgba(245, 158, 11, 0.15) 1px, transparent 1px),
        linear-gradient(90deg, rgba(245, 158, 11, 0.15) 1px, transparent 1px)
      `,
      backgroundSize: '20px 20px'
    }}>
      <div className="max-w-7xl mx-auto">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          {/* Left Side - Text Content */}
          <div className="text-left">
            {/* Main Heading */}
            <h1 className="text-5xl md:text-7xl font-bangers mb-4 leading-tight">
              <span className="block text-[#1F2937]">APRENDIZAJE DIVERTIDO</span>
              <span className="block text-[#FF6B7A]">LEJOS DE LAS PANTALLAS</span>
            </h1>

            {/* Subtitle */}
            <p className="text-lg md:text-xl text-slate-700 mb-8">
              Libros de actividades que estimulan creatividad y lógica en niños de 5 a 12 años. Diseñados por una ingeniera apasionada por la educación.
            </p>

            {/* CTA Buttons */}
            <div className="flex flex-col sm:flex-row gap-4">
              <a
                href="https://www.amazon.es/stores/Ediciones-Elemental-Kids-Club/author/B0G24P67WS?language=en&ref=ap_rdr&shoppingPortalEnabled=true"
                target="_blank"
                rel="noopener noreferrer"
                className="bg-[#E85D75] hover:bg-[#d54a63] text-white font-bold py-4 px-8 rounded-full text-lg transition-all text-center shadow-[0_5px_0_0_#b94456] hover:shadow-[0_3px_0_0_#b94456] hover:translate-y-[2px] uppercase"
              >
                EXPLORA NUESTROS LIBROS →
              </a>
              <Link
                href="/sobre-nosotros"
                className="bg-[#E85D75] hover:bg-[#d54a63] text-white font-bold py-4 px-8 rounded-full text-lg transition-all text-center shadow-[0_5px_0_0_#b94456] hover:shadow-[0_3px_0_0_#b94456] hover:translate-y-[2px] uppercase"
              >
                CONOCE LA SERIE →
              </Link>
            </div>
          </div>

          {/* Right Side - Image */}
          <div className="flex justify-center lg:justify-end">
            <div className="relative w-full max-w-2xl h-[500px]">
              <Image
                src="/personajes.png"
                alt="Personajes Elemental Kids"
                fill
                className="object-contain"
                style={{ mixBlendMode: 'multiply' }}
                priority
              />
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
