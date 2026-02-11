import type { Metadata } from 'next';

export const metadata: Metadata = {
  title: 'Contacto - Elemental Kids Club',
  description: '¿Tienes preguntas sobre nuestros libros de actividades? Contáctanos. Estamos aquí para ayudarte con cualquier consulta sobre Elemental Kids Club.',
  keywords: ['contacto elemental kids', 'preguntas libros actividades', 'consultas educación niños', 'atención al cliente'],
  openGraph: {
    title: 'Contacto - Elemental Kids Club',
    description: 'Contáctanos para cualquier pregunta sobre nuestros libros de actividades educativas.',
    url: 'https://elementalkidsclub.com/contacto',
    siteName: 'Elemental Kids Club',
    locale: 'es_ES',
    type: 'website',
  },
  robots: {
    index: true,
    follow: true,
  }
};

export default function ContactoLayout({
  children,
}: {
  children: React.ReactNode;
}) {
  return children;
}
