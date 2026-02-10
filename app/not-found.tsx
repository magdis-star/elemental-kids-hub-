import Link from 'next/link';

export default function NotFound() {
  return (
    <div className="min-h-screen bg-gradient-to-b from-[#F7F9FB] to-white flex items-center justify-center px-5">
      <div className="text-center">
        <div className="text-9xl mb-6">🌪️</div>
        <h1 className="text-6xl font-bold text-slate-800 mb-4">404</h1>
        <h2 className="text-3xl font-bold text-slate-700 mb-4">
          Página No Encontrada
        </h2>
        <p className="text-xl text-slate-600 mb-8 max-w-md mx-auto">
          Parece que esta página se ha volado como el aire. Volvamos al hub de libros.
        </p>
        <Link
          href="/"
          className="inline-block bg-[#2EC4B6] hover:bg-[#28B0A3] text-white px-8 py-4 rounded-full font-bold text-lg transition-all hover:scale-105"
        >
          Volver al Inicio
        </Link>
      </div>
    </div>
  );
}
