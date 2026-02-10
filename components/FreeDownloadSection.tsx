export default function FreeDownloadSection() {
  return (
    <section className="py-20 px-5 bg-[#FF6B7A] text-white relative overflow-hidden">
      {/* Decorative circles */}
      <div className="absolute top-10 left-10 w-32 h-32 bg-white/10 rounded-full"></div>
      <div className="absolute bottom-10 right-10 w-40 h-40 bg-white/10 rounded-full"></div>
      <div className="absolute top-1/2 right-1/4 w-20 h-20 bg-white/10 rounded-full"></div>

      <div className="max-w-4xl mx-auto text-center relative z-10">
        <h2 className="text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-bangers mb-6 leading-tight">
          ¡HAZTE CON EL CUADERNO ANTES DE QUE SE AGOTEN!
        </h2>
        <p className="text-lg md:text-2xl mb-10 font-light">
          La herramienta perfecta para despertar la curiosidad y la inteligencia en casa, ¡sin complicaciones!
        </p>

        <a
          href="https://www.amazon.es/stores/Ediciones-Elemental-Kids-Club/author/B0G24P67WS?language=en&ref=ap_rdr&shoppingPortalEnabled=true"
          target="_blank"
          rel="noopener noreferrer"
          className="inline-flex items-center gap-3 bg-[#FDB44B] hover:bg-[#e8a038] text-[#1F2937] font-bold py-5 px-10 rounded-full text-xl transition-all hover:scale-105 shadow-[0_6px_0_0_#c98a2f] hover:shadow-[0_4px_0_0_#c98a2f] hover:translate-y-[2px] uppercase border-4 border-[#1F2937]"
        >
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7 18C5.9 18 5.01 18.9 5.01 20C5.01 21.1 5.9 22 7 22C8.1 22 9 21.1 9 20C9 18.9 8.1 18 7 18ZM1 2V4H3L6.6 11.59L5.25 14.04C5.09 14.32 5 14.65 5 15C5 16.1 5.9 17 7 17H19V15H7.42C7.28 15 7.17 14.89 7.17 14.75L7.2 14.63L8.1 13H15.55C16.3 13 16.96 12.59 17.3 11.97L20.88 5.48C20.96 5.34 21 5.17 21 5C21 4.45 20.55 4 20 4H5.21L4.27 2H1ZM17 18C15.9 18 15.01 18.9 15.01 20C15.01 21.1 15.9 22 17 22C18.1 22 19 21.1 19 20C19 18.9 18.1 18 17 18Z" fill="currentColor"/>
          </svg>
          Comprar en Amazon
        </a>

        <p className="mt-8 text-sm flex items-center justify-center gap-2 opacity-90">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 1L3 5V11C3 16.55 6.84 21.74 12 23C17.16 21.74 21 16.55 21 11V5L12 1ZM10 17L6 13L7.41 11.59L10 14.17L16.59 7.58L18 9L10 17Z" fill="currentColor"/>
          </svg>
          Compra segura y envío rápido garantizados por Amazon.
        </p>
      </div>
    </section>
  );
}
