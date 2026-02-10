'use client';

import { useState } from 'react';
import Link from 'next/link';
import Image from 'next/image';
import { useParams } from 'next/navigation';
import NewsletterModal from '@/components/NewsletterModal';

interface BookData {
  id: number;
  title: string;
  volume: string;
  element: string;
  description: string;
  longDescription: string;
  features: string[];
  ageRange: string;
  pages: number;
  amazonLink: string;
  status: 'available' | 'new' | 'coming-soon';
  color: string;
  coverImage?: string;
}

const booksData: BookData[] = [
  {
    id: 1,
    title: 'Cuaderno de Actividades Divertidas',
    volume: 'LIBRO 1',
    element: 'fuego',
    description: 'Más de 80 retos de lógica y matemáticas para niños curiosos.',
    longDescription: 'El cuaderno perfecto para niños que aman los desafíos mentales. Más de 80 actividades de lógica y matemáticas diseñadas para estimular el pensamiento crítico mientras se divierten. Cada reto está cuidadosamente calibrado para mantener el interés sin frustración.',
    features: [
      '80+ acertijos de lógica y matemáticas',
      'Sudokus de diferentes niveles de dificultad',
      'Juegos numéricos y operaciones matemáticas',
      'Retos de pensamiento crítico y razonamiento',
      'Secuencias lógicas y patrones',
      'Problemas de ingenio visual',
      'Acertijos que estimulan la creatividad',
      'Niveles progresivos adaptados a la edad',
      'Ilustraciones coloridas y motivadoras',
      'Soluciones detalladas al final del libro',
      'Calidad premium: papel grueso e ilustraciones nítidas',
      'Diseñado por una ingeniera apasionada por la educación'
    ],
    ageRange: '8-12 años',
    pages: 100,
    amazonLink: 'https://www.amazon.es/Cuaderno-Actividades-Divertidas-ni%C3%B1as-ni%C3%B1os/dp/B0G1YYTF7V?ref_=ast_author_dp&th=1&psc=1',
    status: 'available',
    color: '#A8E6A1',
    coverImage: '/libro-1-cover.png'
  },
  {
    id: 2,
    title: 'Cuaderno de Actividades Divertidas, Nuevos desafíos',
    volume: 'LIBRO 2',
    element: 'agua',
    description: 'Más de 100 actividades para viajes largos, restaurantes y momentos de tranquilidad.',
    longDescription: '¿Viaje largo? ¿Tarde de restaurante? Este cuaderno será tu mejor aliado. Más de 100 actividades variadas que mantienen a los niños entretenidos y aprendiendo sin pantallas. Diseñado por una ingeniera con años de experiencia en educación STEM, cada actividad estimula diferentes habilidades mientras los niños se divierten.',
    features: [
      '100+ actividades variadas y entretenidas',
      'Sopas de letras para vocabulario y concentración',
      'Crucigramas que desarrollan lógica verbal',
      'Laberintos para orientación espacial',
      'Sudokus de diferentes niveles',
      'Matemáticas divertidas (sumas, restas, multiplicaciones)',
      'Retos de lógica que estimulan el pensamiento crítico',
      'Código secreto para descifrar mensajes',
      'Encuentra las diferencias para atención al detalle',
      'Descubre la criatura oculta (misterios visuales)',
      'Páginas para colorear y creatividad',
      '🎁 REGALO DESCARGABLE SECRETO dentro del libro'
    ],
    ageRange: '8-12 años',
    pages: 100,
    amazonLink: 'https://www.amazon.es/dp/B0GMBXR33R?ref_=ast_author_dp_rw&th=1&psc=1&dib=eyJ2IjoiMSJ9.-FUCKxXrHj9T1CcsF_OwBX9RdaW_YYKT5KLojvwNBSs.mjREddz9B2b8gUIauAlnyI7s2HmS48tqMp5lCBZnHwo&dib_tag=AUTHOR',
    status: 'new',
    color: '#7DD3FC',
    coverImage: '/libro-2-cover.png'
  },
  {
    id: 3,
    title: 'Más Aventuras en Camino',
    volume: 'PRÓXIMAMENTE',
    element: 'aire',
    description: 'Estamos trabajando en más libros emocionantes para que tus hijos sigan aprendiendo y divirtiéndose.',
    longDescription: 'Estamos trabajando en más libros emocionantes para que tus hijos sigan aprendiendo y divirtiéndose.',
    features: [
      'Contenido en desarrollo',
      'Lanzamiento en 2026',
      'Regístrate para recibir notificaciones'
    ],
    ageRange: 'Por anunciar',
    pages: 0,
    amazonLink: '#',
    status: 'coming-soon',
    color: '#CBD5E0',
    coverImage: '/libro-3-cover.png'
  }
];

export default function BookPage() {
  const params = useParams();
  const id = params.id as string;
  const book = booksData.find(b => b.id === parseInt(id));
  const [showNewsletter, setShowNewsletter] = useState(false);

  if (!book) {
    return (
      <div className="min-h-screen bg-gray-50 py-16 px-5">
        <div className="max-w-6xl mx-auto text-center">
          <h1 className="text-4xl font-bold text-slate-800 mb-4">Libro no encontrado</h1>
          <Link href="/" className="text-[#2EC4B6] hover:underline">
            ← Volver
          </Link>
        </div>
      </div>
    );
  }

  // Dynamic background based on book
  const bgColor = book.id === 1 ? '#E0F2FE' : book.id === 2 ? '#DCFCE7' : '#FEF3C7'; // Light blue for book 1, light green for book 2, light yellow for book 3
  const gridColor = book.id === 1 ? 'rgba(56, 189, 248, 0.15)' : book.id === 2 ? 'rgba(34, 197, 94, 0.15)' : 'rgba(245, 158, 11, 0.15)'; // Blue grid for book 1, green for book 2, yellow for book 3

  return (
    <div className="min-h-screen py-16 px-5" style={{
      backgroundColor: bgColor,
      backgroundImage: `
        linear-gradient(${gridColor} 1px, transparent 1px),
        linear-gradient(90deg, ${gridColor} 1px, transparent 1px)
      `,
      backgroundSize: '20px 20px'
    }}>
      <div className="max-w-6xl mx-auto">
        <Link href="/" className="text-slate-600 hover:text-slate-800 mb-8 inline-block">
          ← Volver
        </Link>

        <div className="bg-white rounded-3xl shadow-xl overflow-hidden border-t-8 border-[#5BC0EB]">
          <div className="grid md:grid-cols-2 gap-8 p-8 md:p-12">
            {/* Left Column - Book Cover */}
            <div>
              {book.coverImage ? (
                <div className="relative h-[500px] mb-6">
                  <Image
                    src={book.coverImage}
                    alt={`Portada de ${book.title}`}
                    fill
                    className="object-contain rounded-2xl"
                    priority
                  />
                </div>
              ) : (
                <div className="bg-gray-200 rounded-2xl h-[500px] flex items-center justify-center text-2xl font-bold text-gray-400 mb-6">
                  {book.volume.toUpperCase()}
                </div>
              )}

              {book.status === 'new' && (
                <div className="bg-[#FF6B7A] text-white text-center py-2 px-4 rounded-full font-bold mb-4">
                  ¡NUEVO LANZAMIENTO!
                </div>
              )}

              {book.status === 'coming-soon' && (
                <div className="bg-[#8D99AE] text-white text-center py-2 px-4 rounded-full font-bold mb-4">
                  PRÓXIMAMENTE
                </div>
              )}
            </div>

            {/* Right Column - Book Details */}
            <div className="flex flex-col justify-between">
              <div>
                <h1 className="text-4xl font-bold text-slate-800 mb-3">
                  {book.title}
                </h1>
                <h2 className="text-xl text-slate-600 mb-6">
                  {book.volume}
                </h2>

                <p className="text-lg text-slate-700 mb-6 leading-relaxed">
                  {book.longDescription}
                </p>

                <div className="mb-6">
                  <h3 className="text-xl font-bold text-slate-800 mb-3">
                    ¿Qué incluye?
                  </h3>
                  <ul className="space-y-2">
                    {book.features.map((feature, index) => (
                      <li key={index} className="flex items-start">
                        <span className="text-[#FDB44B] mr-2">✓</span>
                        <span className="text-slate-700">{feature}</span>
                      </li>
                    ))}
                  </ul>
                </div>

                <div className="grid grid-cols-2 gap-4 mb-8 text-center">
                  <div className="bg-gray-50 p-4 rounded-lg">
                    <div className="text-sm text-slate-600">Edad recomendada</div>
                    <div className="text-lg font-bold text-slate-800">{book.ageRange}</div>
                  </div>
                  {book.pages > 0 && (
                    <div className="bg-gray-50 p-4 rounded-lg">
                      <div className="text-sm text-slate-600">Páginas</div>
                      <div className="text-lg font-bold text-slate-800">{book.pages}</div>
                    </div>
                  )}
                </div>
              </div>

              {book.status === 'coming-soon' ? (
                <button
                  onClick={() => setShowNewsletter(true)}
                  className="w-full bg-[#E85D75] hover:bg-[#d54a63] text-white py-4 px-8 rounded-full font-bold text-lg transition-all shadow-[0_5px_0_0_#b94456] hover:shadow-[0_3px_0_0_#b94456] hover:translate-y-[2px] uppercase"
                >
                  Avísame cuando esté disponible
                </button>
              ) : (
                <a
                  href={book.amazonLink}
                  target="_blank"
                  rel="noopener noreferrer"
                  className="block text-center w-full bg-[#E85D75] hover:bg-[#d54a63] text-white py-4 px-8 rounded-full font-bold text-lg transition-all shadow-[0_5px_0_0_#b94456] hover:shadow-[0_3px_0_0_#b94456] hover:translate-y-[2px] uppercase"
                >
                  Comprar en Amazon →
                </a>
              )}
            </div>
          </div>
        </div>

        {/* Comparison Section - For Book 1 and Book 2 */}
        {(book.id === 1 || book.id === 2) && (
          <div className="mt-12 bg-white rounded-3xl shadow-xl p-8 md:p-12">
            <h2 className="text-3xl font-bangers text-center mb-8 text-[#5BC0EB]">
              ¿POR QUÉ ESTE CUADERNO ES DIFERENTE?
            </h2>

            <div className="grid md:grid-cols-2 gap-6">
              <div className="bg-[#A8E6A1] rounded-xl p-6 border-4 border-[#1F2937]">
                <div className="text-2xl mb-2">✓</div>
                <h3 className="font-bold text-lg mb-2">Variedad increíble</h3>
                <p className="text-slate-700">Más de {book.id === 1 ? '80' : '100'} actividades diferentes. Nunca se aburren porque cada página es una nueva aventura.</p>
              </div>

              <div className="bg-[#7DD3FC] rounded-xl p-6 border-4 border-[#1F2937]">
                <div className="text-2xl mb-2">✓</div>
                <h3 className="font-bold text-lg mb-2">Niveles progresivos</h3>
                <p className="text-slate-700">Las actividades aumentan gradualmente de dificultad. Perfecto para mantener el reto sin frustración.</p>
              </div>

              <div className="bg-[#FCD34D] rounded-xl p-6 border-4 border-[#1F2937]">
                <div className="text-2xl mb-2">✓</div>
                <h3 className="font-bold text-lg mb-2">{book.id === 1 ? 'Pensamiento crítico' : 'Regalo descargable secreto'}</h3>
                <p className="text-slate-700">{book.id === 1 ? 'Desarrolla habilidades lógicas y matemáticas de forma divertida y efectiva.' : 'Incluye acceso a contenido extra descargable para seguir la diversión en casa.'}</p>
              </div>

              <div className="bg-[#FF6B7A] rounded-xl p-6 border-4 border-[#1F2937]">
                <div className="text-2xl mb-2">✓</div>
                <h3 className="font-bold text-lg mb-2">Diseñado por una ingeniera</h3>
                <p className="text-slate-700">Creado con fundamento pedagógico por una ingeniera apasionada por la educación.</p>
              </div>

              <div className="bg-[#A8E6A1] rounded-xl p-6 border-4 border-[#1F2937]">
                <div className="text-2xl mb-2">✓</div>
                <h3 className="font-bold text-lg mb-2">Calidad premium</h3>
                <p className="text-slate-700">Papel de alta calidad, ilustraciones nítidas y encuadernación resistente.</p>
              </div>

              <div className="bg-[#7DD3FC] rounded-xl p-6 border-4 border-[#1F2937]">
                <div className="text-2xl mb-2">✓</div>
                <h3 className="font-bold text-lg mb-2">Sin pantallas</h3>
                <p className="text-slate-700">Diversión garantizada lejos de tablets y móviles. Perfecto para desarrollar concentración.</p>
              </div>
            </div>

            {/* Use Cases Section */}
            <div className="mt-12">
              <h3 className="text-2xl font-bangers text-center mb-6 text-[#FF6B7A]">
                PERFECTO PARA:
              </h3>
              <div className="grid md:grid-cols-3 gap-6">
                <div className="text-center">
                  <h4 className="font-bold mb-2">{book.id === 1 ? 'Niños curiosos' : 'Viajes largos'}</h4>
                  <p className="text-slate-600 text-sm">{book.id === 1 ? 'Que aman los desafíos mentales y los retos de ingenio.' : 'Aviones, trenes, coches. Horas de entretenimiento garantizado.'}</p>
                </div>
                <div className="text-center">
                  <h4 className="font-bold mb-2">{book.id === 1 ? 'Desarrollo cognitivo' : 'Restaurantes'}</h4>
                  <p className="text-slate-600 text-sm">{book.id === 1 ? 'Estimula lógica, razonamiento y pensamiento matemático.' : 'Mientras esperáis la comida, tranquilidad para todos.'}</p>
                </div>
                <div className="text-center">
                  <h4 className="font-bold mb-2">En casa</h4>
                  <p className="text-slate-600 text-sm">Tardes lluviosas, momentos de relax o como rutina diaria.</p>
                </div>
              </div>
            </div>
          </div>
        )}

        <NewsletterModal
          isOpen={showNewsletter}
          onClose={() => setShowNewsletter(false)}
          bookTitle={book.title}
        />
      </div>
    </div>
  );
}
