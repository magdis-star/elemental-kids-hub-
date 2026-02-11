import Link from 'next/link';
import Image from 'next/image';

export default function BonusSection() {
  return (
    <section className="py-16 px-5">
      <div className="max-w-6xl mx-auto">
        <div className="grid md:grid-cols-2 gap-8 items-center">
          {/* Left Side - Image with Hover Effect */}
          <div className="flex justify-center md:justify-start">
            <div className="relative w-[400px] h-[400px] transition-all duration-500 ease-out hover:scale-110 hover:-translate-x-4">
              <Image
                src="/regalo-secreto.png"
                alt="Regalo Descargable Secreto"
                fill
                className="object-contain"
                priority
              />
            </div>
          </div>

          {/* Right Side - Content */}
          <div>
            <h2 className="text-3xl md:text-4xl lg:text-5xl font-bangers mb-4 leading-tight italic">
              <span className="block text-[#1F2937]">PORQUE LA MEJOR PANTALLA...</span>
              <span className="block text-[#5BC0EB]">ES SU IMAGINACIÓN.</span>
            </h2>

            <p className="text-base md:text-lg text-slate-800 mb-6 leading-relaxed">
              Los cuadernos incluyen retos como <span className="font-bold">"Siete Diferencias"</span>, <span className="font-bold">"Operación Incógnita"</span> y <span className="font-bold">"Busca y Encuentra"</span> que garantizan que el cerebro de tu hijo trabaje a máxima potencia.
            </p>

            {/* Bonus Box */}
            <div className="bg-white border-4 border-[#FDB44B] rounded-xl p-6 shadow-lg">
              <div className="mb-3">
                <h3 className="text-xl md:text-2xl font-bangers text-[#E85D75] italic">
                  ¡BONUS EXCLUSIVO!
                </h3>
              </div>

              <p className="text-slate-900 mb-4 leading-relaxed text-sm md:text-base">
                ¿Ya compraste el libro? <span className="font-bold">Descarga tu contenido extra GRATIS.</span> Haz clic en el botón para recibir actividades adicionales directamente en tu bandeja de entrada.
              </p>

              {/* Two Buttons */}
              <div className="flex flex-col sm:flex-row gap-3">
                <a
                  href="https://elementalkidsclub.activehosted.com/f/1"
                  target="_blank"
                  rel="noopener noreferrer"
                  className="flex-1 bg-[#A8E6A1] hover:bg-[#8fd686] text-[#1F2937] font-bold py-3 px-4 rounded-full text-center transition-all shadow-[0_3px_0_0_#7cbd6d] hover:shadow-[0_1px_0_0_#7cbd6d] hover:translate-y-[2px] uppercase text-xs md:text-sm border-2 border-[#1F2937]"
                >
                  LIBRO 1
                </a>
                <Link
                  href="/bonuses#libro2"
                  className="flex-1 bg-[#7DD3FC] hover:bg-[#5bc4f5] text-[#1F2937] font-bold py-3 px-4 rounded-full text-center transition-all shadow-[0_3px_0_0_#4aaee0] hover:shadow-[0_1px_0_0_#4aaee0] hover:translate-y-[2px] uppercase text-xs md:text-sm border-2 border-[#1F2937]"
                >
                  LIBRO 2
                </Link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
