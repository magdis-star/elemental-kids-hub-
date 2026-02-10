export default function TestimonialsSection() {
  const testimonials = [
    {
      stars: 5,
      text: '"Lo compré como regalo para un cumple y gustó muchísimo. Tiene una variedad de pasatiempos impresionante. Es ideal para niños que les gusta resolver enigmas y ponerse a prueba. Sin duda lo volveré a comprar para regalo."',
      author: 'Amazon España, Noviembre 2025',
      color: '#A8E6A1'
    },
    {
      stars: 5,
      text: '"Compré este cuaderno para un viaje largo y la verdad que fenomenal. Mi hijo que tiene 9 años estuvo súper entretenido con las sopas de letras, sudokus y las actividades de lógica. Muy variado, muchas actividades distintas. Lo recomiendo totalmente."',
      author: 'Irene, Amazon España',
      color: '#7DD3FC'
    },
    {
      stars: 5,
      text: '"Este cuaderno está genial. A mi hija le fascinan los retos matemáticas y las criaturas ocultas. Solo ver cómo lo disfruta ya vale la pena. Les pone a prueba y es ideal para encontrar momentos de tranquilidad para los mayores."',
      author: 'Edu, Amazon España',
      color: '#FCD34D'
    }
  ];

  return (
    <section className="py-16 px-5" style={{
      backgroundColor: '#FEF3C7',
      backgroundImage: `
        linear-gradient(rgba(245, 158, 11, 0.15) 1px, transparent 1px),
        linear-gradient(90deg, rgba(245, 158, 11, 0.15) 1px, transparent 1px)
      `,
      backgroundSize: '20px 20px'
    }}>
      <div className="max-w-6xl mx-auto">
        <h2 className="text-4xl md:text-5xl font-bangers text-center mb-12 text-[#5BC0EB]">
          LO QUE DICEN LOS PADRES
        </h2>

        <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
          {testimonials.map((testimonial, index) => (
            <div key={index} className="rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow" style={{ backgroundColor: testimonial.color }}>
              {/* Stars */}
              <div className="flex justify-center mb-4">
                {[...Array(testimonial.stars)].map((_, i) => (
                  <span key={i} className="text-[#FDB44B] text-2xl">⭐</span>
                ))}
              </div>

              {/* Testimonial Text */}
              <p className="text-slate-700 mb-6 italic leading-relaxed text-center">
                {testimonial.text}
              </p>

              {/* Author */}
              <p className="text-slate-800 font-bold text-center">
                — {testimonial.author}
              </p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}
