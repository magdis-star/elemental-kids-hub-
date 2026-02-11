'use client';

import { useState } from 'react';
import StructuredData from '@/components/StructuredData';
import { generateBreadcrumbSchema } from '@/lib/seo';

export default function Contacto() {
  const breadcrumbSchema = generateBreadcrumbSchema([
    { name: 'Inicio', url: '/' },
    { name: 'Contacto', url: '/contacto' }
  ]);
  const [formData, setFormData] = useState({
    name: '',
    email: '',
    subject: '',
    message: ''
  });
  const [submitted, setSubmitted] = useState(false);
  const [loading, setLoading] = useState(false);

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    setLoading(true);

    // Simulate API call
    await new Promise(resolve => setTimeout(resolve, 1000));

    setSubmitted(true);
    setLoading(false);

    // Reset form
    setTimeout(() => {
      setSubmitted(false);
      setFormData({ name: '', email: '', subject: '', message: '' });
    }, 3000);
  };

  const handleChange = (e: React.ChangeEvent<HTMLInputElement | HTMLTextAreaElement | HTMLSelectElement>) => {
    setFormData({
      ...formData,
      [e.target.name]: e.target.value
    });
  };

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

      <div className="max-w-5xl mx-auto">
        <h1 className="text-4xl md:text-6xl font-bangers text-center mb-4 text-[#FF6B7A]">
          ¡CONTÁCTANOS!
        </h1>
        <p className="text-lg md:text-xl text-slate-700 mb-12 text-center max-w-2xl mx-auto">
          ¿Tienes preguntas sobre nuestros libros? Estamos aquí para ayudarte
        </p>

        <div className="grid md:grid-cols-2 gap-8 mb-12 items-start">
          {/* Contact Info */}
          <div className="bg-white rounded-3xl shadow-lg p-6 border-4 border-[#5BC0EB]">
            <h2 className="text-2xl md:text-3xl font-bangers text-[#5BC0EB] mb-4">INFORMACIÓN</h2>

            <div className="space-y-5">
              <div className="flex items-start gap-3">
                <div className="flex-shrink-0 w-12 h-12 rounded-full bg-[#FF6B7A] flex items-center justify-center">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 4H4C2.9 4 2.01 4.9 2.01 6L2 18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4ZM20 8L12 13L4 8V6L12 11L20 6V8Z" fill="white"/>
                  </svg>
                </div>
                <div>
                  <h3 className="font-bold text-slate-800 mb-1 text-base">Email</h3>
                  <a href="mailto:info@elementalkids.com" className="text-[#5BC0EB] hover:underline break-all text-base">
                    info@elementalkids.com
                  </a>
                </div>
              </div>

              <div className="flex items-start gap-3">
                <div className="flex-shrink-0 w-12 h-12 rounded-full bg-[#FDB44B] flex items-center justify-center">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 18C5.9 18 5.01 18.9 5.01 20C5.01 21.1 5.9 22 7 22C8.1 22 9 21.1 9 20C9 18.9 8.1 18 7 18ZM1 2V4H3L6.6 11.59L5.25 14.04C5.09 14.32 5 14.65 5 15C5 16.1 5.9 17 7 17H19V15H7.42C7.28 15 7.17 14.89 7.17 14.75L7.2 14.63L8.1 13H15.55C16.3 13 16.96 12.59 17.3 11.97L20.88 5.48C20.96 5.34 21 5.17 21 5C21 4.45 20.55 4 20 4H5.21L4.27 2H1ZM17 18C15.9 18 15.01 18.9 15.01 20C15.01 21.1 15.9 22 17 22C18.1 22 19 21.1 19 20C19 18.9 18.1 18 17 18Z" fill="white"/>
                  </svg>
                </div>
                <div>
                  <h3 className="font-bold text-slate-800 mb-1 text-base">Comprar Libros</h3>
                  <a
                    href="https://www.amazon.es/stores/Ediciones-Elemental-Kids-Club/author/B0G24P67WS?language=en&ref=ap_rdr&shoppingPortalEnabled=true"
                    target="_blank"
                    rel="noopener noreferrer"
                    className="text-[#5BC0EB] hover:underline text-base"
                  >
                    Ver en Amazon →
                  </a>
                </div>
              </div>
            </div>
          </div>

          {/* Contact Form */}
          <div className="bg-white rounded-3xl shadow-lg p-8 border-4 border-[#FF6B7A]">
            <h2 className="text-2xl md:text-3xl font-bangers text-[#FF6B7A] mb-6">ENVÍANOS UN MENSAJE</h2>

            {!submitted ? (
              <form onSubmit={handleSubmit} className="space-y-4">
                <div>
                  <label htmlFor="name" className="block text-sm font-bold text-slate-700 mb-1">
                    Nombre *
                  </label>
                  <input
                    type="text"
                    id="name"
                    name="name"
                    value={formData.name}
                    onChange={handleChange}
                    required
                    className="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-[#FDB44B] focus:border-[#FDB44B] outline-none"
                  />
                </div>

                <div>
                  <label htmlFor="email" className="block text-sm font-bold text-slate-700 mb-1">
                    Email *
                  </label>
                  <input
                    type="email"
                    id="email"
                    name="email"
                    value={formData.email}
                    onChange={handleChange}
                    required
                    className="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-[#FDB44B] focus:border-[#FDB44B] outline-none"
                  />
                </div>

                <div>
                  <label htmlFor="subject" className="block text-sm font-bold text-slate-700 mb-1">
                    Asunto *
                  </label>
                  <select
                    id="subject"
                    name="subject"
                    value={formData.subject}
                    onChange={handleChange}
                    required
                    className="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-[#FDB44B] focus:border-[#FDB44B] outline-none"
                  >
                    <option value="">Selecciona...</option>
                    <option value="general">Consulta General</option>
                    <option value="pedidos">Pedidos y Envíos</option>
                    <option value="colegios">Colegios y Educadores</option>
                    <option value="prensa">Prensa y Colaboraciones</option>
                  </select>
                </div>

                <div>
                  <label htmlFor="message" className="block text-sm font-bold text-slate-700 mb-1">
                    Mensaje *
                  </label>
                  <textarea
                    id="message"
                    name="message"
                    value={formData.message}
                    onChange={handleChange}
                    required
                    rows={4}
                    className="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-[#FDB44B] focus:border-[#FDB44B] outline-none resize-none"
                  />
                </div>

                <button
                  type="submit"
                  disabled={loading}
                  className="w-full bg-[#E85D75] hover:bg-[#d54a63] text-white py-4 px-6 rounded-full font-bold transition-all shadow-[0_4px_0_0_#b94456] hover:shadow-[0_2px_0_0_#b94456] hover:translate-y-[2px] disabled:opacity-50 uppercase text-lg"
                >
                  {loading ? 'Enviando...' : 'Enviar Mensaje →'}
                </button>
              </form>
            ) : (
              <div className="text-center py-12">
                <div className="text-7xl mb-4">✓</div>
                <h3 className="text-2xl md:text-3xl font-bangers text-[#A8E6A1] mb-2">¡MENSAJE ENVIADO!</h3>
                <p className="text-slate-600 text-lg">
                  Te responderemos pronto.
                </p>
              </div>
            )}
          </div>
        </div>
      </div>
    </div>
  );
}
