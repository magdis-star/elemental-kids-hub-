import BookCard from '@/components/BookCard';
import HeroSection from '@/components/HeroSection';
import AboutSection from '@/components/AboutSection';
import FreeDownloadSection from '@/components/FreeDownloadSection';
import TestimonialsSection from '@/components/TestimonialsSection';
import StructuredData from '@/components/StructuredData';
import { organizationSchema, generateProductSchema } from '@/lib/seo';
import type { Metadata } from 'next';

export const metadata: Metadata = {
  title: 'Elemental Kids Club - Libros de Actividades Educativas para Niños',
  description: 'Libros de actividades educativas para niños de 5 a 12 años. Más de 100 actividades sin pantallas: sudokus, laberintos, sopas de letras y mucho más. ¡Aprendizaje divertido garantizado!',
  keywords: ['libros actividades niños', 'cuadernos educativos infantiles', 'aprendizaje sin pantallas', 'actividades niños 5-12 años', 'sudokus para niños', 'laberintos infantiles', 'sopas de letras niños'],
  authors: [{ name: 'Ediciones Elemental Kids Club' }],
  openGraph: {
    title: 'Elemental Kids Club - Libros de Actividades Educativas',
    description: 'Más de 100 actividades educativas sin pantallas para niños de 5 a 12 años. Sudokus, laberintos, sopas de letras y mucho más.',
    url: 'https://elementalkidsclub.com',
    siteName: 'Elemental Kids Club',
    images: [
      {
        url: '/logo.png',
        width: 1200,
        height: 630,
        alt: 'Elemental Kids Club',
      }
    ],
    locale: 'es_ES',
    type: 'website',
  },
  twitter: {
    card: 'summary_large_image',
    title: 'Elemental Kids Club - Libros de Actividades Educativas',
    description: 'Más de 100 actividades educativas sin pantallas para niños de 5 a 12 años.',
    images: ['/logo.png'],
  },
  robots: {
    index: true,
    follow: true,
  }
};

export default function Home() {
  const books = [
    {
      id: 1,
      title: 'Cuaderno de Actividades Divertidas',
      element: 'fuego',
      description: 'Más de 80 retos de lógica y matemáticas para niños curiosos. Acertijos, sudokus, juegos numéricos y desafíos que estimulan el pensamiento crítico.',
      volume: 'LIBRO 1',
      status: 'available' as const,
      buttonText: 'Ver Detalles →',
      buttonLink: '#',
      color: '#A8E6A1',
      badge: '',
      badgeColor: '',
      coverImage: '/libro-1-cover.png'
    },
    {
      id: 2,
      title: 'Cuaderno de Actividades Divertidas, Nuevos desafíos',
      element: 'agua',
      description: 'Más de 100 actividades para viajes largos, restaurantes y momentos de tranquilidad. Sopas de letras, sudokus, laberintos y mucho más.',
      volume: 'LIBRO 2',
      status: 'new' as const,
      buttonText: 'Ver Detalles →',
      buttonLink: '#',
      color: '#7DD3FC',
      badge: 'NUEVO LIBRO',
      badgeColor: 'bg-[#FF6B7A]',
      coverImage: '/libro-2-cover.png'
    },
    {
      id: 3,
      title: 'Más Aventuras en Camino',
      element: 'aire',
      description: 'Estamos trabajando en más libros emocionantes para que tus hijos sigan aprendiendo y divirtiéndose.',
      volume: 'PRÓXIMAMENTE',
      status: 'coming-soon' as const,
      buttonText: 'Avísame →',
      buttonLink: '#',
      color: '#FCD34D',
      badge: '',
      badgeColor: ''
    }
  ];

  const productSchemas = books
    .filter(book => book.status === 'available' || book.status === 'new')
    .map(book => generateProductSchema(book));

  return (
    <div className="min-h-screen">
      {/* Structured Data for SEO */}
      <StructuredData data={organizationSchema} />
      {productSchemas.map((schema, index) => (
        <StructuredData key={index} data={schema} />
      ))}

      {/* Hero Section - "Aprendizaje Divertido Lejos de las Pantallas" */}
      <HeroSection />

      {/* About Section - "¿Qué es Elemental Kids Club?" */}
      <AboutSection />

      {/* Books Section - "Nuestros Libros" */}
      <section id="libros" className="py-16 px-5 scroll-mt-20" style={{
        backgroundColor: '#FEF3C7',
        backgroundImage: `
          linear-gradient(rgba(245, 158, 11, 0.15) 1px, transparent 1px),
          linear-gradient(90deg, rgba(245, 158, 11, 0.15) 1px, transparent 1px)
        `,
        backgroundSize: '20px 20px'
      }}>
        <div className="max-w-7xl mx-auto">
          <h2 className="text-4xl md:text-5xl font-bangers text-center mb-4 text-[#5BC0EB]">
            NUESTROS LIBROS
          </h2>
          <p className="text-center text-slate-600 mb-12 max-w-2xl mx-auto">
            Cada libro explora un tema diferente con actividades diseñadas para aprender jugando
          </p>

          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {books.map((book) => (
              <BookCard key={book.id} book={book} />
            ))}
          </div>
        </div>
      </section>

      {/* Free Download Section - "¡Descarga Actividades Gratis!" */}
      <FreeDownloadSection />

      {/* Testimonials Section - "Lo que dicen los padres" */}
      <TestimonialsSection />
    </div>
  );
}
