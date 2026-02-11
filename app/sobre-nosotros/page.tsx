import Image from 'next/image';
import StructuredData from '@/components/StructuredData';
import { generateBreadcrumbSchema, organizationSchema } from '@/lib/seo';
import type { Metadata } from 'next';

export const metadata: Metadata = {
  title: 'Sobre Nosotros - Elemental Kids Club',
  description: 'Conoce la misión de Elemental Kids Club. Libros de actividades educativas diseñados por una ingeniera apasionada por la educación, sin pantallas para niños de 5 a 12 años.',
  keywords: ['sobre elemental kids club', 'quiénes somos', 'libros educativos infantiles', 'ingeniera educación niños'],
  openGraph: {
    title: 'Sobre Nosotros - Elemental Kids Club',
    description: 'Libros de actividades educativas diseñados por una ingeniera apasionada por la educación.',
    url: 'https://elementalkidsclub.com/sobre-nosotros',
    siteName: 'Elemental Kids Club',
    images: [
      {
        url: '/personajes.png',
        width: 1200,
        height: 630,
        alt: 'Personajes Elemental Kids Club',
      }
    ],
    locale: 'es_ES',
    type: 'website',
  },
  robots: {
    index: true,
    follow: true,
  }
};

export default function SobreNosotros() {
  const breadcrumbSchema = generateBreadcrumbSchema([
    { name: 'Inicio', url: '/' },
    { name: 'Sobre Nosotros', url: '/sobre-nosotros' }
  ]);
  return (
    <div className="min-h-screen py-16 px-5" style={{
      backgroundColor: '#FEF3C7',
      backgroundImage: `
        linear-gradient(rgba(245, 158, 11, 0.15) 1px, transparent 1px),
        linear-gradient(90deg, rgba(245, 158, 11, 0.15) 1px, transparent 1px)
      `,
      backgroundSize: '20px 20px'
    }}>
      {/* Structured Data for SEO */}
      <StructuredData data={breadcrumbSchema} />
      <StructuredData data={organizationSchema} />

      <div className="max-w-4xl mx-auto">
        <h1 className="text-5xl md:text-6xl font-bangers text-[#5BC0EB] mb-6 text-center">
          SOBRE ELEMENTAL KIDS CLUB
        </h1>

        <div className="bg-white rounded-3xl shadow-lg p-8 md:p-12 mb-8">
          <div className="prose prose-lg max-w-none">
            <h2 className="text-3xl font-bangers text-[#5BC0EB] mb-4">NUESTRA MISIÓN</h2>
            <p className="text-slate-700 mb-6 leading-relaxed">
              En Elemental Kids creemos que cada niño tiene una mente inquieta esperando ser desafiada.
              Nuestra misión es ofrecer alternativas sin pantallas para que los niños aprendan mientras se divierten,
              a través de libros de actividades variadas diseñadas con fundamento pedagógico.
            </p>
            <p className="text-slate-700 mb-6 leading-relaxed">
              <strong className="text-[#F97316]">Diseñado por una ingeniera apasionada por la educación</strong>, cada libro combina
              rigor técnico con creatividad para ofrecer actividades que realmente estimulan el desarrollo cognitivo de los niños.
            </p>

            <h2 className="text-3xl font-bangers text-[#FF6B7A] mb-4 mt-8">NUESTROS LIBROS</h2>
            <p className="text-slate-700 mb-6 leading-relaxed">
              Cada libro está diseñado con un enfoque diferente para mantener a los niños entretenidos
              y aprendiendo sin pantallas. Desde retos de lógica hasta actividades para viajes,
              tenemos el libro perfecto para cada momento.
            </p>

            <h2 className="text-3xl font-bangers text-[#FDB44B] mb-4 mt-8">POR QUÉ NOS ELIGEN</h2>
            <ul className="space-y-3 text-slate-700">
              <li className="flex items-start">
                <span className="text-[#FDB44B] mr-3 text-xl">✓</span>
                <span>Diseñado por una ingeniera con fundamento pedagógico</span>
              </li>
              <li className="flex items-start">
                <span className="text-[#FDB44B] mr-3 text-xl">✓</span>
                <span>Variedad increíble: más de 10 tipos de actividades por libro</span>
              </li>
              <li className="flex items-start">
                <span className="text-[#FDB44B] mr-3 text-xl">✓</span>
                <span>Niveles progresivos que aumentan sin frustración</span>
              </li>
              <li className="flex items-start">
                <span className="text-[#FDB44B] mr-3 text-xl">✓</span>
                <span>Calidad premium: papel de alta calidad e ilustraciones nítidas</span>
              </li>
              <li className="flex items-start">
                <span className="text-[#FDB44B] mr-3 text-xl">✓</span>
                <span>100% sin pantallas: tiempo de calidad lejos de dispositivos</span>
              </li>
            </ul>
          </div>
        </div>

        {/* Meet the Characters Section */}
        <div className="bg-white rounded-3xl shadow-lg p-8 md:p-12 mb-8">
          <h2 className="text-4xl font-bangers text-center mb-8 text-[#FF6B7A]">
            CONOCE A NUESTROS PERSONAJES
          </h2>

          <div className="grid md:grid-cols-2 gap-12 items-center mb-12">
            <div className="text-center">
              <div className="rounded-3xl p-8 mb-6">
                <div className="relative w-full h-96 mb-4 bg-[#FF6B7A]/20 rounded-2xl flex items-center justify-center">
                  <Image
                    src="/character-pink-v2.png"
                    alt="La Científica Rosa"
                    fill
                    className="object-contain"
                    style={{ mixBlendMode: 'multiply' }}
                  />
                </div>
                <h3 className="text-2xl font-bangers text-[#FF6B7A] mb-2">La Científica Rosa</h3>
              </div>
              <p className="text-slate-700 leading-relaxed">
                Curiosa y creativa, le encanta resolver acertijos y descubrir nuevos desafíos. Siempre tiene una idea brillante para cada problema.
              </p>
            </div>

            <div className="text-center">
              <div className="rounded-3xl p-8 mb-6">
                <div className="relative w-full h-96 mb-4 bg-[#7DD3FC]/20 rounded-2xl flex items-center justify-center">
                  <Image
                    src="/character-blue.png"
                    alt="El Científico Azul"
                    fill
                    className="object-contain"
                    style={{ mixBlendMode: 'multiply' }}
                  />
                </div>
                <h3 className="text-2xl font-bangers text-[#5BC0EB] mb-2">El Científico Azul</h3>
              </div>
              <p className="text-slate-700 leading-relaxed">
                Lógico y analítico, le fascinan las matemáticas y los rompecabezas. Siempre encuentra la solución perfecta con pensamiento crítico.
              </p>
            </div>
          </div>

          <div className="text-center bg-[#FCD34D]/20 rounded-2xl p-8 border-4 border-[#FDB44B]">
            <p className="text-lg text-slate-800 font-semibold mb-2">
              Juntos, guían a los niños en aventuras de aprendizaje sin pantallas 🚀
            </p>
            <p className="text-slate-600">
              Estos personajes acompañan a los niños en cada libro, motivándolos a pensar, crear y divertirse aprendiendo.
            </p>
          </div>
        </div>

        <div className="text-center">
          <a
            href="https://www.amazon.es/stores/Ediciones-Elemental-Kids-Club/author/B0G24P67WS?language=en&ref=ap_rdr&shoppingPortalEnabled=true"
            target="_blank"
            rel="noopener noreferrer"
            className="inline-block bg-[#E85D75] hover:bg-[#d54a63] text-white px-8 py-4 rounded-full font-bold text-lg transition-all shadow-[0_5px_0_0_#b94456] hover:shadow-[0_3px_0_0_#b94456] hover:translate-y-[2px] uppercase"
          >
            Explorar los Libros
          </a>
        </div>
      </div>
    </div>
  );
}
