import Link from 'next/link';
import Image from 'next/image';

interface Book {
  id: number;
  title: string;
  element: string;
  description: string;
  volume: string;
  status: 'available' | 'new' | 'coming-soon';
  buttonText: string;
  buttonLink: string;
  color: string;
  badge: string;
  badgeColor: string;
  coverImage?: string;
}

export default function BookCard({ book }: { book: Book }) {
  return (
    <div
      className="rounded-3xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 flex flex-col justify-between min-h-[500px] bg-white border-8"
      style={{ borderColor: book.color }}
    >
      <div>
        {/* Badge */}
        {book.badge && (
          <div className="flex justify-center mb-4">
            <span className={`${book.badgeColor} text-white text-sm md:text-base font-bold px-5 py-2 rounded-full shadow-lg uppercase tracking-wide`}>
              {book.badge}
            </span>
          </div>
        )}

        {/* Book Cover/Icon */}
        <div className="flex justify-center mb-6">
          {book.coverImage ? (
            <div className="relative w-56 h-72 rounded-lg overflow-hidden shadow-lg">
              <Image
                src={book.coverImage}
                alt={book.title}
                fill
                className="object-cover"
              />
            </div>
          ) : book.status === 'coming-soon' ? (
            <div className="relative w-32 h-32">
              <svg viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg" className="w-full h-full animate-pulse">
                {/* Main star */}
                <path d="M60 20 L67 47 L95 47 L73 63 L80 90 L60 75 L40 90 L47 63 L25 47 L53 47 Z" fill="#FF6B7A" opacity="0.9"/>

                {/* Small accent stars */}
                <path d="M30 30 L32 36 L38 36 L33 40 L35 46 L30 42 L25 46 L27 40 L22 36 L28 36 Z" fill="#5BC0EB" opacity="0.8"/>
                <path d="M90 35 L92 41 L98 41 L93 45 L95 51 L90 47 L85 51 L87 45 L82 41 L88 41 Z" fill="#FDB44B" opacity="0.8"/>
                <path d="M85 85 L87 91 L93 91 L88 95 L90 101 L85 97 L80 101 L82 95 L77 91 L83 91 Z" fill="#A8E6A1" opacity="0.8"/>

                {/* Sparkle dots */}
                <circle cx="25" cy="70" r="3" fill="#5BC0EB" opacity="0.6"/>
                <circle cx="95" cy="75" r="2" fill="#FF6B7A" opacity="0.6"/>
                <circle cx="50" cy="15" r="2.5" fill="#FDB44B" opacity="0.7"/>
              </svg>
            </div>
          ) : (
            <div className="text-7xl">📚</div>
          )}
        </div>

        {/* Volume */}
        <h3 className="text-3xl md:text-4xl font-bangers text-[#1F2937] mb-3 text-center">
          {book.volume}
        </h3>

        {/* Title */}
        <h4 className="text-xl font-bold text-slate-800 mb-4 text-center">
          {book.title}
        </h4>

        {/* Description */}
        <p className="text-slate-700 mb-6 text-sm leading-relaxed">
          {book.description}
        </p>

        {/* Features list for coming soon */}
        {book.status === 'coming-soon' && (
          <ul className="space-y-2 mb-6">
            <li className="flex items-start text-sm text-slate-700">
              <span className="mr-2">•</span>
              <span>Mantente al día de nuevos lanzamientos</span>
            </li>
            <li className="flex items-start text-sm text-slate-700">
              <span className="mr-2">•</span>
              <span>Recibe ofertas y promociones especiales</span>
            </li>
            <li className="flex items-start text-sm text-slate-700">
              <span className="mr-2">•</span>
              <span>Descubre nuevas ideas</span>
            </li>
          </ul>
        )}
      </div>

      {/* CTA Button */}
      <Link
        href={`/libro/${book.id}`}
        className="block text-center py-3 px-7 rounded-full font-bold transition-all bg-[#E85D75] hover:bg-[#d54a63] text-white shadow-[0_4px_0_0_#b94456] hover:shadow-[0_2px_0_0_#b94456] hover:translate-y-[2px] uppercase"
      >
        {book.buttonText}
      </Link>
    </div>
  );
}
