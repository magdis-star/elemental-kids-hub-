import BonusSection from '@/components/BonusSection';
import Link from 'next/link';
import StructuredData from '@/components/StructuredData';
import { generateBreadcrumbSchema } from '@/lib/seo';
import type { Metadata } from 'next';

export const metadata: Metadata = {
  title: 'Bonuses Exclusivos - Elemental Kids Club',
  description: 'Descarga contenido extra gratuito para los libros de Elemental Kids Club. Actividades adicionales para seguir aprendiendo sin pantallas.',
  keywords: ['bonuses elemental kids', 'descargas gratis actividades niños', 'contenido extra libros infantiles', 'actividades gratis para imprimir'],
  openGraph: {
    title: 'Bonuses Exclusivos - Elemental Kids Club',
    description: 'Descarga contenido extra gratuito para los libros de Elemental Kids Club.',
    url: 'https://elementalkidsclub.com/bonuses',
    siteName: 'Elemental Kids Club',
    images: [
      {
        url: '/regalo-secreto.png',
        width: 1200,
        height: 630,
        alt: 'Bonuses Exclusivos Elemental Kids Club',
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

export default function BonusesPage() {
  const breadcrumbSchema = generateBreadcrumbSchema([
    { name: 'Inicio', url: '/' },
    { name: 'Bonuses', url: '/bonuses' }
  ]);
  return (
    <div className="min-h-screen" style={{
      backgroundColor: '#FEF3C7',
      backgroundImage: `
        linear-gradient(rgba(245, 158, 11, 0.15) 1px, transparent 1px),
        linear-gradient(90deg, rgba(245, 158, 11, 0.15) 1px, transparent 1px)
      `,
      backgroundSize: '20px 20px'
    }}>
      {/* Structured Data for SEO */}
      <StructuredData data={breadcrumbSchema} />

      {/* Bonus Section */}
      <BonusSection />

      {/* Back Link */}
      <div className="py-8 text-center">
        <Link
          href="/"
          className="inline-flex items-center text-[#5BC0EB] hover:text-[#4a9bc9] font-semibold text-lg transition-colors hover:underline"
        >
          ← Volver
        </Link>
      </div>
    </div>
  );
}
