export default function AboutSection() {
  return (
    <section className="py-16 px-5 bg-white">
      <div className="max-w-6xl mx-auto">
        <h2 className="text-4xl md:text-5xl font-bangers text-center mb-8 text-[#5BC0EB]">
          ¿QUÉ ES ELEMENTAL KIDS CLUB?
        </h2>

        <div className="grid md:grid-cols-2 gap-12 items-center">
          {/* Left Column - Description */}
          <div>
            <p className="text-lg text-slate-700 mb-6 leading-relaxed">
              Elemental Kids Club es una serie de libros de actividades diseñados para niños de 5 a 12 años que buscan aprender mientras se divierten, libres de las pantallas.
            </p>
            <p className="text-lg text-slate-700 mb-6 leading-relaxed">
              <span className="font-bold text-[#F97316]">Diseñado por una ingeniera apasionada por la educación</span>, cada libro está cuidadosamente creado para estimular la creatividad, desarrollar el pensamiento lógico y fomentar la curiosidad natural de los niños.
            </p>
            <p className="text-lg text-slate-700 mb-8 leading-relaxed">
              Perfectos para <span className="font-semibold">viajes largos</span>, tardes en <span className="font-semibold">restaurantes</span>, o simplemente momentos de tranquilidad en casa. ✈️🍽️🏠
            </p>

            {/* Features List */}
            <div className="space-y-4">
              <div className="flex items-start">
                <span className="bg-[#FDB44B] text-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 mt-1 mr-3 font-bold text-xl shadow-md">
                  ✓
                </span>
                <div>
                  <h3 className="font-bold text-slate-800 text-lg">Variedad increíble:</h3>
                  <p className="text-slate-600">Sopas de letras, sudokus, laberintos, crucigramas y mucho más</p>
                </div>
              </div>

              <div className="flex items-start">
                <span className="bg-[#7FCC6A] text-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 mt-1 mr-3 font-bold text-xl shadow-md">
                  ✓
                </span>
                <div>
                  <h3 className="font-bold text-slate-800 text-lg">Niveles progresivos:</h3>
                  <p className="text-slate-600">Dificultad que aumenta gradualmente sin frustración</p>
                </div>
              </div>

              <div className="flex items-start">
                <span className="bg-[#FF6B7A] text-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 mt-1 mr-3 font-bold text-xl shadow-md">
                  ✓
                </span>
                <div>
                  <h3 className="font-bold text-slate-800 text-lg">Calidad premium:</h3>
                  <p className="text-slate-600">Papel de alta calidad e ilustraciones nítidas</p>
                </div>
              </div>
            </div>
          </div>

          {/* Right Column - Highlighted Box */}
          <div className="bg-[#7DD3FC]/30 rounded-3xl p-8 shadow-lg border-4 border-[#F59E0B]">
            <div className="flex justify-center mb-4">
              <svg width="80" height="80" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M70 20H50C50 14.4772 45.5228 10 40 10C34.4772 10 30 14.4772 30 20H20C14.4772 20 10 24.4772 10 30V50C15.5228 50 20 54.4772 20 60C20 65.5228 15.5228 70 10 70V80C10 85.5228 14.4772 90 20 90H50C50 84.4772 54.4772 80 60 80C65.5228 80 70 84.4772 70 90H80C85.5228 90 90 85.5228 90 80V60C84.4772 60 80 55.5228 80 50C80 44.4772 84.4772 40 90 40V30C90 24.4772 85.5228 20 80 20H70Z" fill="#5BC0EB"/>
              </svg>
            </div>
            <h3 className="text-2xl md:text-3xl font-bangers text-center mb-4 text-[#5BC0EB]">
              PERFECTO PARA NIÑOS CURIOSOS
            </h3>
            <p className="text-center text-slate-700 mb-6">
              Actividades que despiertan la imaginación y el amor por aprender
            </p>

            <div className="grid grid-cols-3 gap-4 text-center">
              <div className="bg-white rounded-xl p-4">
                <div className="text-3xl font-bold text-[#F97316]">100+</div>
                <div className="text-sm text-slate-600">Actividades por libro</div>
              </div>
              <div className="bg-white rounded-xl p-4">
                <div className="text-3xl font-bold text-[#F97316]">10+</div>
                <div className="text-sm text-slate-600">Tipos de ejercicios</div>
              </div>
              <div className="bg-white rounded-xl p-4">
                <div className="text-3xl font-bold text-[#F97316]">0</div>
                <div className="text-sm text-slate-600">Pantallas necesarias</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
